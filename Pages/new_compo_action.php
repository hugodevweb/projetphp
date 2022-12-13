<!-- :variable signifie que la valeur de la variable sera utilisée dans la requête SQL préparée pour remplacer le marqueur de paramètre nommé :variable. Cela permet d'éviter les injections SQL en s'assurant que la valeur utilisée dans la requête est correctement échappée et traitée en tant que valeur de paramètre, plutôt que comme une partie de la requête elle-même. -->

<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "digit.me";

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');


$type = $_POST['type'];
switch($type) {
    case "stockage":
        $stockage_type = $_POST['stockage_type'];
		$stockage_taille = $_POST['stockage_taille'];
        $stockage_vitesse = $_POST['stockage_vitesse'];
		switch($stockage_type){
			case"SSD":
				$stmt = $pdo->prepare("
				INSERT INTO composants_stockage(price,rating,brand,name_comp,img,capacite,type_comp,speed,is_available)
				VALUES ( :price, :rating, :brand,:name,CONCAT(LAST_INSERT_ID()+1,'/images/'), :taille, :type, :vitesse, :is_available)");
				
				$name = $_POST['name'];
				$price = $_POST['price'];
				$brand = $_POST['brand'];
				$rating = $_POST['rating'];
				$is_available = $_POST['is_available'];

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':type', $stockage_type);
				$stmt->bindParam(':taille', $stockage_taille);
				$stmt->bindParam(':vitesse', $stockage_vitesse);

				//Exécution de la requête
				$stmt->execute();
				break;
			case"HDD":
				$stmt = $pdo->prepare("INSERT INTO hdd (name, price, brand, rating, is_available, type, taille, vitesse) VALUES (:name, :price, :brand, :rating, :is_available, :type, :taille, :vitesse),");

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':type', $stockage_type);
				$stmt->bindParam(':taille', $stockage_taille);
				$stmt->bindParam(':vitesse', $stockage_vitesse);

				//Exécution de la requête
				$stmt->execute();
				break;
			default:
        
				echo "<p>erreur requete</p>";
				break;

		}
       

        
    case "board":
        $board_type_socket = $_POST['board_type_socket'];
        $board_nbram = $_POST['board_nbram'];

        $stmt = $pdo->prepare("INSERT INTO stockage (name, price, brand, rating, is_available, type, taille, vitesse) VALUES (:name, :price, :brand, :rating, :is_available, :type, :taille, :vitesse)");

		//Liaison des valeurs aux variables
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':price', $price);
		$stmt->bindParam(':brand', $brand);
		$stmt->bindParam(':rating', $rating);
		$stmt->bindParam(':is_available', $is_available);
		$stmt->bindParam(':type', $stockage_type);
		$stmt->bindParam(':taille', $stockage_taille);
		$stmt->bindParam(':vitesse', $stockage_vitesse);

		//Exécution de la requête
		$stmt->execute();
        break;
    case "alim":
        $alim_wattage = $_POST['alim_wattage'];
        $alim_certification = $_POST['alim_certification'];
        //Inserer les données dans la base de données ici
        break;
    case "gpu":
        $gpu_vram = $_POST['gpu_vram'];
        $gpu_clock = $_POST['gpu_clock'];
        //Inserer les données dans la base de données ici
        break;
    case "boiter":
        $boitier_type = $_POST['boitier_type'];
        $boitier_format = $_POST['boitier_format'];
        //Inserer les données dans la base de données ici
        break;
    case "cpu":
        $cpu_socket = $_POST['cpu_socket'];
        $cpu_core = $_POST['cpu_core'];
        //Inserer les données dans la base de données ici
        break;
    default:
        
		echo "<p>erreur requete</p>";
        break;
}

?>