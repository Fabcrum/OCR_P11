/**
 * # Bouton Charger plus  ================ #
 * Utilisé en page d'accueil
 */

$(document).ready(function () { 
    let bouton = document.getElementById('bouton-charger-plus')
    let compteur = 1

    bouton.addEventListener("click", function(e) {
        e.preventDefault()                        // Empêcher l'envoi classique du formulaire
        const ajaxurl = $(this).attr('action')     // L'URL de data-ajaxurl du formulaire
        compteur++

        // Données chargées au changement
        const data = {
          action: $(this).data('action'),
          nonce: $(this).data('nonce'),
          nombrePhotos: this.getAttribute('data-nombrePhotos'),
          compteur: compteur,
        }

        fetch(ajaxurl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Cache-Control': 'no-cache',
          },
          body: new URLSearchParams(data),
        })
          
        .then(response => response.json())
        .then(body => {

          if (!body.success) {
            alert(body.data);
            return;
          }

          $('.photo-grille').html(body.data);
        })
    })
})