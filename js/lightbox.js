// # Lightbox  ================ #
// - Récupération des éléments dans le DOM
// - Ouverture click bouton
// - Fermeture lightbox

// Récupération des éléments dans le DOM

const iconFullscreen = document.querySelector(".icon-fullscreen")
const lightbox = document.getElementById("lightbox")
const lightboxFond = document.getElementById("lightbox-fond")
const lightboxImg = document.getElementById("lightbox-img")

// Ouverture click bouton
iconFullscreen.addEventListener("click", () => { 
    lightbox.classList.remove("display-none")
    lightboxFond.classList.remove("display-none")
    lightboxImg.classList.remove("display-none")
});

// Fermeture lightbox
lightboxFond.addEventListener("click", () => {
    lightbox.classList.add("display-none")
    lightboxFond.classList.add("display-none")
    lightboxImg.classList.add("display-none")
})