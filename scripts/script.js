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
