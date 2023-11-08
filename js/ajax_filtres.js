 /**
 * # Filtres d'affichage des photo  ================ #
 * Utilisés en page d'accueil
 */
 
 $(function () {

    $('.select2').select2({
      //theme: 'classic',
      width: 'inherit',
      placeholder: 'Sélectionnez une catégorie',
      allowClear: false,
    });
  
    let form = document.getElementById('filtresAjax');
  
    // Utilise l'événement 'select2:select' pour tous les selects
    $('.select2').on('select2:select', async function (e) {
      e.preventDefault(); // Empêcher l'envoi classique du formulaire
  
      const ajaxurl = $(form).attr('action'); // L'URL de data-ajaxurl du formulaire
  
      // Données chargées au changement
      const data = {
        selectCategories: $('#selectCategories').val(),
        selectFormats: $('#selectFormats').val(),
        selectTriDate: $('#selectTriDate').val(),
        action: $(form).find('input[name=action]').val(),
        nonce: $(form).find('input[name=nonce]').val(),
      };
  
      try {
        const response = await fetch(ajaxurl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Cache-Control': 'no-cache',
          },
          body: new URLSearchParams(data),
        });
  
        if (!response.ok) {
          console.error('Erreur dans la requête Fetch');
          return;
        }
        const responseData = await response.json();
        if (!responseData.success) {
          console.error('Erreur dans la réponse : ' + responseData.data);
          return;
        }
  
        $('.photo-grille').html(responseData.data);
      } catch (error) {
        console.error('Erreur inattendue : ' + error);
      }
    });
  });