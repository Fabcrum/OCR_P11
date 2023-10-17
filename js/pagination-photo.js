// # PAGINATION PHOTO  ================ #
// - Récupération des éléments dans le DOM
// - Fonctions photo prev ou next
// - AddEventListener de basculement


// Récupération des éléments dans le DOM

const imgNext = document.querySelector(".pagination-photo__img-next")
const imgPrev = document.querySelector(".pagination-photo__img-prev")
const flecheNext = document.querySelector(".pagination-photo__next")
const flechePrev = document.querySelector(".pagination-photo__prev")

// AddEventListener de basculement
flecheNext.addEventListener("pointerover", (event) => { 
    imgNext.style.opacity='1'
});

flecheNext.addEventListener("pointerout", (event) => { 
    imgNext.style.opacity='0'
});

flechePrev.addEventListener("pointerover", (event) => { 
    imgPrev.style.opacity='1'
});

flechePrev.addEventListener("pointerout", (event) => { 
    imgPrev.style.opacity='0'
});