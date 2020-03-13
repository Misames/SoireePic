<?php
$action = $_REQUEST["action"];
switch ($action) {
    case 'reserver':
        $idsoiree = $_REQUEST["idsoiree"];
        $res = $reservationDAO->reserverSoiree($idsoiree, $_COOKIE["CMSID"], $_REQUEST["nbplace"]);
        if ($res) header("Location: index.php");
        else {
            $message = "RESERVATION";
            include("vues/v_message.php");
        }
        break;
    default:
        header("Location: index.php");
        break;
}
