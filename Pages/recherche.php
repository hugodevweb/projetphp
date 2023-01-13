<?php
// Récupère les valeurs de recherche envoyées par le script JavaScript
$searchValue = $_POST['searchValue'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
$recherche = $bdd -> prepare("SELECT  id_comp,brand, name FROM composants_alim WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_board WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_boitier WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_cooler WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_cpu WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_gpu WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp,brand, name FROM composants_stockage WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'");

$recherche->execute();

// Construit le sélecteur HTML pour afficher les résultats de la requête
echo "<ul id='search-results-select' class=\"menu-list\">";
    
while ($row = $recherche->fetch()) {
    echo "
    <li>
        <a id =\"res\" href=\"#\">" . $row['name'] . " " . $row['brand'] . "</a>
    </li>";
}
echo "</ul>";


?>
