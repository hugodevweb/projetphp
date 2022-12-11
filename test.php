<!DOCTYPE html>
<html>
<head>
  <title>Page HTML avec liste déroulante</title>
  <style>
    .HDD {
      display: block;
    }
    .SSD {
      display: none;
    }
  </style>
</head>
<body>
  <h1>Type de stockage</h1>
  <p>Sélectionnez le type de stockage dans la liste déroulante ci-dessous :</p>

  <select id="type_stockage">
    <option value="HDD" selected>Disque Dur</option>
    <option value="SSD">SSD</option>
  </select>

  <div class="HDD">
    <h2>Disque Dur</h2>
    <p>Un disque dur est un type de stockage de données utilisant des plateaux magnétiques pour enregistrer et accéder à des données.</p>
  </div>

  <div class="SSD">
    <h2>SSD</h2>
    <p>Un SSD (Solid State Drive) est un type de stockage de données utilisant des puces de mémoire flash pour enregistrer et accéder à des données.</p>
  </div>

  <script>
    var typeStockage = document.getElementById("type_stockage");
    typeStockage.addEventListener("change", function() {
      var hddDiv = document.querySelector(".HDD");
      var ssdDiv = document.querySelector(".SSD");
      if (this.value === "HDD") {
        hddDiv.style.display = "block";
        ssdDiv.style.display = "none";
      } else if (this.value === "SSD") {
        hddDiv.style.display = "none";
        ssdDiv.style.display = "block";
      }
    });
  </script>
</body>
</html>
