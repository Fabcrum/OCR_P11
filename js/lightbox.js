/**
 * # LIGHTBOX  ================ #
 * - Récupération des éléments dans le DOM
 * - Ouverture click bouton
 * - Fermeture lightbox
 */

// Récupération des éléments dans le DOM
const iconFullscreen = document.querySelectorAll(".icon-fullscreen")
const lightbox = document.getElementById("lightbox")
const lightboxFond = document.getElementById("lightbox-fond")
const lightboxClose = document.querySelector(".lightbox-close")
const lightboxImg = document.querySelector(".lightbox-img")
const lightboxPrev = document.querySelector(".lightbox-fleches__prev")
const lightboxNext = document.querySelector(".lightbox-fleches__next")

// Ouverture lightbox
iconFullscreen.forEach(function (item) {
    item.addEventListener("click", () => {
        lightbox.classList.remove("display-none")
        lightboxFond.classList.remove("display-none")
        lightboxImg.classList.remove("display-none")
    })
})

// Fermeture lightbox
lightboxClose.addEventListener("click", () => {
    lightbox.classList.add("display-none")
})

lightboxPrev.addEventListener("click", () => {
    lightbox.classList.add("display-none")
})

lightboxNext.addEventListener("click", () => {
    lightbox.classList.add("display-none")
})