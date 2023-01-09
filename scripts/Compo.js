var modal = document.getElementById("MyModal");

var btn = document.getElementById("MyBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclik = function(event) {
  if (event.target == modal) {
    modal.style.display ="none";
  }
 
}