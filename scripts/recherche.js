$("#rechbtn").click(function(e){
    e.preventDefault(); // Empêche l'envoi du formulaire
    // Récupère la valeur saisie dans la barre de recherche
    var searchValue = $("#rech").val();

    // Envoie les valeurs de recherche au script PHP en utilisant AJAX
    $.ajax({
        type: "POST",
        url: "./Pages/recherche.php",
        data: { searchValue: searchValue },
        success: function(data) {
            // Traite les résultats de la requête et les affiche dans le menu déroulant (dropdown)
            $("#search-results").html(data);

            // Affiche le menu déroulant (dropdown)
            $("#search-results-dropdown").addClass("is-active");
        }
    });
});
