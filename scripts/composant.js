$("#btnajout").click(function(e){
    e.preventDefault(); // Empêche l'envoi du formulaire
    // Récupère la valeur saisie dans la barre de recherche
    var idcompo = $("#btnajout").val();
    // Envoie les valeurs de recherche au script PHP en utilisant AJAX
    $.ajax({
        type: "POST",
        url: "../Pages/ajout_compo_config.php",
        data: { idcompo: idcompo },
        success: function() {
            // Traite les résultats de la requête et les affiche dans le menu déroulant (dropdown)
            
            $('#msg_error').removeClass('appear');
            $('#msg_success').addClass('appear');
            setTimeout(function() {
              $('#msg_success').removeClass('appear');
            }, 5000);
        }
    });
});