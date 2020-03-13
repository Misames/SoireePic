/**
 * Affiche un modal pour la reservation
 * @param {String} id de la soirée
 * @param {String} nom de la soirée
 */
let handleModal = (id, nom) => {
  let valeurmax = document.getElementById(id).getAttribute('data-valeurmax')
  let idsoiree = document.getElementById(id).getAttribute('data-idsoiree')
  document.getElementById('exampleModalLongTitle').innerHTML = 'Réservation de la soirée : ' + nom
  document.getElementById('txt').setAttribute('max', valeurmax)
  document.getElementById('idSoiree').setAttribute('value', idsoiree)
}
/**
 * Permet de cacher ou décourvir
 * le mot de passe utilisateur
 */
let handleMdp = () => {
  let intput = document.getElementById('mdp').getAttribute('type')
  let eye = document.getElementById('eye')
  if (intput == 'password') {
    document.getElementById('mdp').setAttribute('type', 'text')
    eye.setAttribute('src', 'https://image.flaticon.com/icons/png/32/346/346567.png')
  } else {
    document.getElementById('mdp').setAttribute('type', 'password')
    eye.setAttribute('src', 'https://image.flaticon.com/icons/png/32/2089/2089831.png')
  }
}
