 /**
 * # Filtres d'affichage des photo  ================ #
 * Utilisés en page d'accueil
 */
 
 $(document).ready(function () { 
  let form = document.getElementById('filtresAjax')

  form.addEventListener("change", async function(e) {
    e.preventDefault()                        // Empêcher l'envoi classique du formulaire
    const ajaxurl = $(this).attr('action')     // L'URL de data-ajaxurl du formulaire

    // Données chargées au changement
    const data = {
      selectCategories: $(this).find('select[name=selectCategories]').val(), 
      selectFormats: $(this).find('select[name=selectFormats]').val(), 
      selectTriDate: $(this).find('select[name=selectTriDate]').val(),
      action: $(this).find('input[name=action]').val(),
      nonce:  $(this).find('input[name=nonce]').val(),
    }

    try {
      const response = await fetch(ajaxurl, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
          'Cache-Control': 'no-cache',
        },
        body: new URLSearchParams(data),
      })
        
      if (!response.ok) {
        console.error("Erreur dans la requête Fetch");
        return;
      }
      const responseData = await response.json();
      if (!responseData.success) {
        console.error("Erreur dans la réponse : " + responseData.data);
        return;
      }

      $('.photo-grille').html(responseData.data);
      
    } catch (error) {
      console.error("Erreur inattendue : " + error);
    }
  })
})

