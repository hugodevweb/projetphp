<?php
// Récupère les valeurs de recherche envoyées par le script JavaScript
$searchValue = $_POST['searchValue'];

// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=diggit.me;charset=utf8;', "root", "");
$recherche = $bdd -> prepare("SELECT  id_comp, brand, name, 'composants_alim' as source FROM composants_alim WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_board' as source FROM composants_board WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_boitier' as source FROM composants_boitier WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_cooler' as source FROM composants_cooler WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_cpu' as source FROM composants_cpu WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_gpu' as source FROM composants_gpu WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_stockage' as source FROM composants_stockage WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'
UNION
SELECT  id_comp, brand, name, 'composants_ram' as source FROM composants_ram WHERE name LIKE '%$searchValue%' OR brand LIKE '%$searchValue%'");

$recherche->execute();
if(empty($searchValue)){
    
}
else{
// Construit le sélecteur HTML pour afficher les résultats de la requête
echo "<ul id='search-results-select' class=\"menu-list\">";
    
while ($row = $recherche->fetch()) {
    echo "
    <li>
        <a id =\"res\" href=\"./Pages/Composants.php?composant=".$row['id_comp']."&type=".$row['source']."\"><b>".$row['brand']."</b> - ".$row['name']."</a>
       
    </li>";
}
echo "</ul>";

}
?>
