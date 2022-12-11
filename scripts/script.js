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
// Récupération de la valeur de l'option choisie dans le menu déroulant

// Fonction pour afficher les div en fonction de la valeur de la liste déroulante
function afficherDiv() {
  // Récupération de la valeur de la variable type_stockage
  var type = document.getElementById('type_stockage').value;
  var divs = ['SSD', 'HDD'];

  for (var i = 0; i < divs.length; i++) {
    if (divs[i] === type) {
      document.getElementById(divs[i]).style.display = "block";
    } else {
      document.getElementById(divs[i]).style.display = "none";
    }
  }
}

// Appel de la fonction lorsque l'événement onchange de la liste déroulante est déclenché
document.getElementById("type_stockage").addEventListener("change", afficherDiv);




