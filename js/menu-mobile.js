// # TRANSFORMATION DU MENU  ================ #
// - Récupération des éléments dans le DOM
// - Ouverture et fermeture click bouton
// - Click sur les différents liens

// Récupération des éléments dans le DOM

const siteNavigation = document.getElementById("site-navigation_mobile")
const boutonMenu = document.getElementById("bouton-menu")
const menuOuvert = document.getElementById("menu-ouvert")
let page = document.getElementById("page")

// Ouverture et fermeture click bouton

boutonMenu.addEventListener("click", () => { 
    menuOuvert.classList.remove("display-none")
    page.appendChild(menuOuvert)
});

// Click sur les différents liens

menuOuvert.addEventListener("click", () => {
    menuOuvert.classList.add("display-none")
})