function showDiv() {
  var type = document.getElementById('type').value;
  var divs = ['cooler', 'stockage', 'board', 'alim', 'gpu', 'boiter', 'cpu'];

  for (var i = 0; i < divs.length; i++) {
    if (divs[i] === type) {
      document.getElementById(divs[i]).style.display = "block";
    } else {
      document.getElementById(divs[i]).style.display = "none";
    }
  }
}

  // In the script.js file
  

  $(document).ready(function(){
    $("#form_composants").submit(function(e){
        e.preventDefault();

                  const errors = [];
                  const type = document.getElementById('type').value;
            
                  // Vérifier que la valeur n'est pas "erreur_choix_composant" (la valeur par défaut du menu déroulant)
                  if (type === 'erreur_choix_composant') {
                    $('.select').addClass('is-danger');
                    errors.push('Erreur dans le choix de composant');
                }

                const name = document.getElementsByName('name')[0].value;
                if (!name) {
                  $('.field > input[name="name"]').addClass('is-danger');
                  errors.push('Le nom du composant est obligatoire');
                }

                // Vérifier le prix du composant
                const price = document.getElementsByName('price')[0].value;
                if (!price || isNaN(price)) {
                  $('.field > input[name="price"]').addClass('is-danger');
                  errors.push('Le prix du composant est obligatoire');
                }

                // Vérifier la marque du composant
                const brand = document.getElementsByName('brand')[0].value;
                if (!brand) {
                  $('.field > input[name="brand"]').addClass('is-danger');
                  errors.push('La marque du composant est obligatoire');
                }

                // Vérifier la note du composant
                const rating = document.getElementsByName('rating')[0].value;
                if (!rating || isNaN(price) && price<5 && price>0) {
                  $('.field > input[name="rating"]').addClass('is-danger');
                  errors.push('La note du composant est obligatoire');
                }

                // Vérifier l'URL du composant
                const URL = document.getElementsByName('URL')[0].value;
                if (!URL) {
                  $('.field > input[name="URL"]').addClass('is-danger');
                  errors.push('L\'URL du composant est obligatoire');
                }

                // Vérifier si le composant est disponible
                const isAvailable = document.querySelector('input[name="is_available"]:checked');
                if (!isAvailable) {
                  errors.push('Vous devez indiquer si le composant est disponible ou non');
                }
// ----------------------------------------------------------------------------------------------------------------------



                // Vérifier le type de stockage si le type de composant est "stockage"
                if (type === 'stockage') {
                  const stockageType = document.querySelector('input[name="stockage_type"]:checked');
                  if (!stockageType) {
                    errors.push('Vous devez indiquer le type de stockage');
                  }
                  const stockage_taille = document.getElementsByName('stockage_taille')[0].value;
                if (!stockage_taille || isNaN(price)) {
                  $('.field > input[name="stockage_taille"]').addClass('is-danger');
                  errors.push('L\'espace de stockage du composant est obligatoire');
                }

                const stockage_speed = document.getElementsByName('stockage_vitesse')[0].value;
                if (!stockage_speed || isNaN(price)) {
                  $('.field > input[name="stockage_vitesse"]').addClass('is-danger');
                  errors.push('La vitesse de stockage du composant est obligatoire');
                }
                }

                else if (type === 'cooler') {
                // Composant "cooler"

              // Vérifie si le type de refroidissement a été sélectionné
              if (!document.querySelector('input[name="cooler_type"]:checked')) {
                errors.push("Veuillez sélectionner un type de refroidissement");
              }

              // Vérifie si le niveau sonore a été entré
              if (!document.querySelector('input[name="cooler_son"]').value ) {
                document.querySelector('input[name="cooler_son"]').classList.add('is-danger');
                errors.push("Le niveau sonore du refroidissement est obligatoire");
              }

              // Vérifie si la taille a été entrée
              if (!document.querySelector('input[name="cooler_taille"]').value) {
                document.querySelector('input[name="cooler_taille"]').classList.add('is-danger');
                errors.push("La taille du refroidissement est obligatoire");
              }

              // Vérifie si la vitesse de rotation a été entrée
              if (!document.querySelector('input[name="cooler_speed"]').value) {
                document.querySelector('input[name="cooler_speed"]').classList.add('is-danger');
                errors.push("La vitesse de rotation du refroidissement est obligatoire");
              }
                }
                else if (type === 'board') {
                  
                  // Composant "board"
                    const boardSocket = document.getElementsByName('board_socket')[0].value;
                  if (!boardSocket) {
                    $('.field > input[name="board_socket"]').addClass('is-danger');
                    errors.push('Le type de socket de la carte mère est obligatoire');
                  }

                  const boardRam = document.getElementsByName('board_ram')[0].value;
                  if (!boardRam) {
                    $('.field > input[name="board_ram"]').addClass('is-danger');
                    errors.push('Le nombre de slot de RAM de la carte mère est obligatoire');
                  }}
                  else if (type === 'alim') {
                  // Composant "alim"

                  // Vérifie si la consommation a été entrée
                  if (!document.querySelector('input[name="alim_wattage"]').value) {
                    document.querySelector('input[name="alim_wattage"]').classList.add('is-danger');
                    errors.push("La consommation de l'alimentation est obligatoire");
                  }

                  // Vérifie si le type de modulabilité a été sélectionné
                  if (!document.querySelector('select[name="is_modulable"]').value) {
                    document.querySelector('select[name="is_modulable"]').classList.add('is-danger');
                    errors.push("Le type de modulabilité de l'alimentation est obligatoire");
              }}
              else if (type === 'gpu') {
                
              // Composant "gpu"

              // Vérifie si la puissance a été entrée
              if (!document.querySelector('input[name="gpu_puiss"]').value) {
                document.querySelector('input[name="gpu_puiss"]').classList.add('is-danger');
                errors.push("La puissance de la carte graphique est obligatoire");
              }

            

              // Vérifie si le nombre de cœurs a été entré
              if (!document.querySelector('input[name="gpu_ram"]').value) {
                document.querySelector('input[name="gpu_ram"]').classList.add('is-danger');
                errors.push("Le nombre de cœurs de la carte graphique est obligatoire");
              }
              }
              else if(type==='cpu'){
                // Composant "cpu"

              // Vérifie si la puissance a été entrée
              if (!document.querySelector('input[name="cpu_puiss"]').value) {
                document.querySelector('input[name="cpu_puiss"]').classList.add('is-danger');
                errors.push("La puissance du CPU est obligatoire");
              }

              // Vérifie si le nombre de cœurs a été entré
              if (!document.querySelector('input[name="cpu_nbr_core"]').value) {
                document.querySelector('input[name="cpu_nbr_core"]').classList.add('is-danger');
                errors.push("Le nombre de cœurs du CPU est obligatoire");
              }

              // Vérifie si la consommation a été entrée
              if (!document.querySelector('input[name="cpu_conso"]').value) {
                document.querySelector('input[name="cpu_conso"]').classList.add('is-danger');
                errors.push("La consommation du CPU est obligatoire");
              }

              }
         
         

        if(errors.length>0){
          $('#msg_error').addClass('appear');
          setTimeout(function() {
            $('#msg_error').removeClass('appear');
          }, 10000);

          for (let i = 0; i < errors.length; i++) {
            $('#errors').html(`<b>${errors[i]}</b>`);
          }
          
        }
        else{
          
          var form = $(this);
          var url = form.attr('action');
          $.ajax({  
              type: "POST",
              url: url,
              data: form.serialize(), // serializes the form's elements
              success: function(data,response)
              {
                $('#msg_error').removeClass('appear');
                $('#msg_success').addClass('appear');
                setTimeout(function() {
                  $('#msg_success').removeClass('appear');
                }, 5000);
                
              }})}
     
        
        });
      });

