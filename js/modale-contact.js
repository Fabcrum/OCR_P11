// # MODALE CONTACT  ================ #
// - Récupération des éléments dans le DOM
// - Ouverture click lien menu
// - Click sur fond modale ou bouton envoyer liens

// Récupération des éléments dans le DOM

const lienContact = document.querySelector(".lien-contact")
const boutonEnvoyer = document.querySelector('button[type="submit"]')
const modaleContact = document.getElementById("modale-contact")
const modaleFond = document.getElementById("fond")
const modaleForm = document.getElementById("form")

// Ouverture click lien menu

lienContact.addEventListener("click", () => { 
    modaleContact.classList.remove("display-none")
    modaleFond.classList.remove("display-none")
    modaleForm.classList.remove("display-none")
});

// Click sur fond modale ou bouton envoyer liens
/*
boutonEnvoyer.addEventListener("click", () => {
    modaleContact.classList.add("display-none")
})
*/

modaleFond.addEventListener("click", () => {
    modaleContact.classList.add("display-none")
    modaleFond.classList.add("display-none")
    modaleForm.classList.add("display-none")
})
