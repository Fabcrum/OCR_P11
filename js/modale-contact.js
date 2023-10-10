// # MODALE CONTACT  ================ #
// - Récupération des éléments dans le DOM
// - Ouverture click lien menu
// - Click sur fond modale ou bouton envoyer liens

// Récupération des éléments dans le DOM

const lienContact = document.querySelector(".lien-contact")
const boutonContact = document.querySelector(".bouton-contact")
const modaleContact = document.getElementById("modale-contact")
const modaleFond = document.getElementById("fond")
const modaleForm = document.getElementById("form")

// Fonction ouverture modale
function ouvertureModale() {
    modaleContact.classList.remove("display-none")
    modaleFond.classList.remove("display-none")
    modaleForm.classList.remove("display-none")
}

// addEventListener d'ouverture

lienContact.addEventListener("click", () => { 
    ouvertureModale()
});

boutonContact.addEventListener("click", () => { 
    ouvertureModale()
});


// Fermeture modale
modaleFond.addEventListener("click", () => {
    modaleContact.classList.add("display-none")
    modaleFond.classList.add("display-none")
    modaleForm.classList.add("display-none")
})

