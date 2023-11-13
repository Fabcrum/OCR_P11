/**
 *  # MODALE CONTACT  ================ #
 *  - Récupération des éléments dans le DOM
 * - Fonction ouverture modale
 * - AddEventListener d'ouverture
 * - Fermeture modale
 * - Chargement code ref.
 */

// Récupération des éléments dans le DOM
const lienContact = document.querySelectorAll(".lien-contact")
const modaleContact = document.getElementById("modale-contact")
const modaleFond = document.getElementById("fond")
const modaleForm = document.getElementById("form")

// Fonction ouverture modale
function ouvertureModale() {
    modaleContact.classList.remove("display-none")
    modaleFond.classList.remove("display-none")
    modaleForm.classList.remove("display-none")
}

// AddEventListener d'ouverture
lienContact.forEach(function (item) {
    item.addEventListener("click", () => {
        ouvertureModale()
    })
})

// Fermeture modale
modaleFond.addEventListener("click", () => {
    modaleContact.classList.add("display-none")
    modaleFond.classList.add("display-none")
    modaleForm.classList.add("display-none")
})

// Chargement code ref.

let refPhoto = document.querySelector(".ref-photo")
const valRefPhoto = refPhoto.innerHTML
$(document).ready(function() {
    $('#bouton-contact').click(function() {
        ouvertureModale()
        $('#champ-ref-photo').val(valRefPhoto)
    })
})