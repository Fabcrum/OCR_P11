// # MODALE CONTACT  ================ #
// - Récupération des éléments dans le DOM
// - Fonction ouverture modale
// - AddEventListener d'ouverture
// - Fermeture modale

// Récupération des éléments dans le DOM

const lienContact = document.querySelector(".lien-contact")
// const boutonContact = document.getElementById("bouton-contact")
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
lienContact.addEventListener("click", () => { 
    ouvertureModale()
});

// Fermeture modale
modaleFond.addEventListener("click", () => {
    modaleContact.classList.add("display-none")
    modaleFond.classList.add("display-none")
    modaleForm.classList.add("display-none")
})

// Remplissage champ ref
let refPhoto = document.querySelector(".ref-photo")
// if (!refPhoto == null) {
const valRefPhoto = refPhoto.innerHTML
console.log(valRefPhoto)
// }

// Affiche : champ-ref-photo
$(document).ready(function() {
//  boutonContact.addEventListener("click", () => { 
    $('#bouton-contact').click(function() {
        ouvertureModale()
        $('#champ-ref-photo').val(valRefPhoto)
    })
})

