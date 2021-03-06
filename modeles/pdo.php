<?php

class PdoSoiree
{
    private static $monPdo;
    private static $monPdoSoiree = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     * Utilisation du design Patter Singleton
     */

    private function __construct()
    {
        //connexion à la BDD sur le net (fonctionne pas)
        //self::$monPdo = new PDO('mysql:host=10.6.110.142;dbname=wizarsitfz666;charset=utf8', 'wizarsitfz666', 'wxcde45PT');
        self::$monPdo = new PDO('mysql:host=localhost;dbname=soireeetoile;charset=utf8', 'root', 'root');
        self::$monPdo->query("SET CHARACTER SET utf8");
    }

    public function _destruct()
    {
        self::$monPdo = null;
        self::$monPdoSoiree = null;
    }

    /**
     * Fonction statique qui cree l'unique instance de la classe
     *
     * Appel : $instancePdobdEtalage = PdoBdvente::getPdoBdEtalage();
     * @return l'unique objet de la classe PdoBdEtalage
     */
    public static function getPdoSoiree()
    {
        if (self::$monPdoSoiree == null) {
            self::$monPdoSoiree = new PdoSoiree();
        }
        return self::$monPdoSoiree;
    }

    public static function seConnecter($login, $mdp)
    {
        $login = htmlentities($login);
        $mdp = htmlentities($mdp);
        $ordresql = "SELECT password FROM usager WHERE identifiant='$login'";
        $resRequete = self::$monPdo->query($ordresql);

        if (is_null($resRequete)) {
            return "resRequete == null";
        }

        $leTuple = $resRequete->fetch();
        $cryptedPassword = $leTuple["password"];

        if (password_verify($mdp, $cryptedPassword)) {
            //LOGIN
            $ordresql = "SELECT idUsager, idType FROM usager WHERE identifiant='$login'";
            $resRequete = self::$monPdo->query($ordresql);
            $leTuple = $resRequete->fetch();
            $id = $leTuple["idUsager"];
            $idType = $leTuple["idType"];

            $ordresql = "UPDATE usager SET estConnecte=1 WHERE identifiant='$login'";
            $nb = self::$monPdo->exec($ordresql);

            if ($nb >= 0) {
                $cstrong = true;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                $ordresql = "SELECT * FROM logn_tokens WHERE idUsager=$id";
                $resRequete = self::$monPdo->query($ordresql);
                if (!is_null($resRequete)) {
                    $ordresql = 'DELETE FROM login_tokens WHERE idUsager=$id';
                    $nb = self::$monPdo->exec($ordresql);
                }
                $ordresql = "INSERT INTO login_tokens VALUES (null, '$token', $id)";
                $nb = self::$monPdo->exec($ordresql);

                setcookie("CMSID", $token, time() + 60 * 60 * 24 * 7, '/', null, null, true);
                setcookie("CMSID_TYPE", $idType, time() + 60 * 60 * 24 * 7, '/', null, null, true);
                setcookie("CMSID_", '1', time() + 60 * 60 * 24 * 3, '/', null, null, true);
                return "Succes";
            } else {
                return "nb < 0";
            }
        } else {
            return "Password doesn't match";
        }
    }

    public static function estConnecte()
    {
        if (isset($_COOKIE['CMSID'])) {
            $token = sha1($_COOKIE['CMSID']);
            $ordresql = "SELECT usager.idUsager AS idUsager, usager.idType AS idType FROM login_tokens INNER JOIN usager ON usager.idUsager = login_tokens.idUsager WHERE token='$token'";
            $resRequete = self::$monPdo->query($ordresql);
            $leTuple = $resRequete->fetch();
            $idUsager = $leTuple["idUsager"];
            $idType = $leTuple["idType"];

            if (isset($_COOKIE['CMSID_'])) {
                return true;
            } else {
                $cstrong = true;
                $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                $ordresql = 'DELETE FROM login_tokens WHERE token=$token';
                $nb = self::$monPdo->exec($ordresql);
                $ordresql = 'INSERT INTO login_tokens VALUES (\'\', $token, $idUsager)';
                $nb = self::$monPdo->exec($ordresql);

                setcookie("CMSID", $token, time() + 60 * 60 * 24 * 7, '/', null, null, true);
                setcookie("CMSID_TYPE", $idType, time() + 60 * 60 * 24 * 7, '/', null, null, true);
                setcookie("CMSID_", '1', time() + 60 * 60 * 24 * 3, '/', null, null, true);

                return true;
            }
        }

        return false;
    }

    public static function estAdmin()
    {
        if (!self::estConnecte()) {
            return false;
        } else {
            return $_COOKIE["CMSID_TYPE"] == 1; // A aller chercher dans la BDD
        }
    }

    public static function seDeconnecter()
    {
        $idUsager = $_COOKIE["CMSID"];
        $ordresql = 'DELETE FROM login_tokens WHERE idUsager=$idUsager';
        $nb = self::$monPdo->exec($ordresql);
        setcookie("CMSID", "", time() - 86400, "/");
        setcookie("CMSID_TYPE", "", time() - 86400, "/");
        setcookie("CMSID_", "", time() - 86400, "/");
    }

    /**
     * affiche toutes les soirées enregistrés
     */
    public static function afficherListeSoireeDisponible()
    {
        $rsql = "SELECT reserver.idSoiree, nom, date, prixPlace, nombreDePlace, SUM(nbPlacePrise) AS nbplace
                 FROM soiree
                 INNER JOIN reserver ON soiree.idSoiree = reserver.idSoiree
                 GROUP BY reserver.idSoiree";
        $resRequete = self::$monPdo->query($rsql);
        $res = $resRequete->fetchAll();
        return $res;
    }

    public static function afficherListeSoiree()
    {
        $rsql = "SELECT * FROM soiree";
        $resRequete = self::$monPdo->query($rsql);
        $res = $resRequete->fetchAll();
        return $res;
    }

    public static function ajouterSoiree($date, $nom, $nombrePlace, $prix)
    {
        $ordresql = "INSERT INTO soiree VALUES(0, '$date', '$nom', $nombrePlace, $prix)";
        $nb = self::$monPdo->exec($ordresql);
        // Retourne vrai si l'insertion a eu lieu, sinon renvoie faux
        return $nb > 0;
    }

    public static function recupererSoiree($id)
    {
        $ordresql = "SELECT * FROM soiree WHERE idSoiree='$id'";
        $resRequete = self::$monPdo->query($ordresql);
        $leTuple = $resRequete->fetch();
        return $leTuple;
    }

    public static function modifierSoiree($id, $date, $nom, $nombrePlace, $prix)
    {
        $ordresql = "UPDATE soiree SET date='$date', nom='$nom', nombreDePlace='$nombrePlace', prixPlace='$prix' WHERE idSoiree=$id";
        $nb = self::$monPdo->exec($ordresql);
        return $nb > 0;
    }

    public static function supprimerSoiree($id)
    {
        $ordresql = "DELETE FROM soiree WHERE idSoiree=$id";
        $nb = self::$monPdo->exec($ordresql);
        return $nb > 0;
    }

    /**
     *
     */
    public function reserverSoiree($idSoiree, $idUser, $nbPlace)
    {
        $sql = "INSERT INTO reserver (idUsager,idSoiree, nbPlace) VALUES ($idUser, $idSoiree, $nbPlace)";
        return self::$monPdo->exec($sql);
    }

    /**
     * $rep correspond a 1 ou 0 si on lui confirme la reservation
     * $idUser pour un utilisateur
     * $idSoiree pour uen soirée
     */
    public function validerRerservation($rep, $idUser, $idSoiree)
    {
        $sql = "UPDATE reservation SET validation = '$rep' WHERE idUsager = $idUser AND idSoiree = $idSoiree";
        return self::$monPdo->exec($sql);
    }
}