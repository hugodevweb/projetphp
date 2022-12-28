<!-- :variable signifie que la valeur de la variable sera utilisée dans la requête SQL préparée pour remplacer le marqueur de paramètre nommé :variable. Cela permet d'éviter les injections SQL en s'assurant que la valeur utilisée dans la requête est correctement échappée et traitée en tant que valeur de paramètre, plutôt que comme une partie de la requête elle-même. -->

<?php

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "digit.me";

$pdo = new PDO('mysql:host=localhost;dbname=diggit.me', 'root', '');


$type = $_POST['type'];
$name = $_POST['name'];
$price = $_POST['price'];
$brand = $_POST['brand'];
$rating = $_POST['rating'];
$is_available = $_POST['is_available'];
$url = $_POST['URL'];

$errors = array();

    // Vérification de la validité des champs
	if (empty($type)) {
		$errors[] = "Le champ 'Type' est obligatoire";
	  }
	  if (empty($name)) {
		$errors[] = "Le champ 'Nom' est obligatoire";
	  }
	  if (!filter_var($price, FILTER_VALIDATE_FLOAT)) {
		$errors[] = "Le champ 'Prix' doit être un nombre décimal valide";
	  }
	  if (empty($brand)) {
		$errors[] = "Le champ 'Marque' est obligatoire";
	  }
	  if (!filter_var($rating, FILTER_VALIDATE_INT) || $rating < 0 || $rating > 5) {
		$errors[] = "Le champ 'Note' doit être un nombre entier compris entre 0 et 5";
	  }
	  if (empty($is_available)) {
		$errors[] = "Le champ 'Disponibilité' doit être 'Oui' ou 'Non'";
	  }
	  if (!filter_var($url, FILTER_VALIDATE_URL)) {
		$errors[] = "Le champ 'URL' doit être une URL valide";
	  }
  // Si des erreurs ont été détectées, renvoi d'un code d'état HTTP erroné et du tableau d'erreurs
  if (count($errors) > 0) {
    http_response_code(400);
    echo json_encode($errors);
  } else {
    // Tous les champs sont valides : traitement normal de la requête
    // ...
  }

// <!-- Dans ce code, nous avons utilisé la fonction empty pour vérifier si chaque champ est vide ou non. Si le champ est vide, nous ajoutons un message d'erreur au tableau $errors.

// Ensuite, nous vérifions si le tableau $errors est vide ou non. Si le tableau n'est pas vide, cela signifie qu'au moins un champ du formulaire est vide, et nous renvoyons un code d'état HTTP erroné et le tableau d'erreurs au client. Si le tableau est vide, cela signifie que tous les champs du formulaire sont valides et nous pouvons procéder au traitement normal de la requête.

// Notez que nous avons utilisé la fonction json_encode pour encoder le tableau d'erreurs en chaîne de caractères JSON avant de le renvoyer au client. Cela permet de facilement traiter les erreurs dans le script JavaScript qui a envoyé la requête $.ajax.
//  -->






switch($type) {
    case "stockage":
        $stockage_type = $_POST['stockage_type'];
        $stockage_taille = $_POST['stockage_taille'];
        $stockage_vitesse = $_POST['stockage_vitesse'];
        if($stockage_type=='SSD')
          {    $stmt = $pdo->prepare("
                INSERT INTO composants_stockage(price,rating,brand,name_comp,img,capacite,type_comp,speed,is_available)
                VALUES ( :price, :rating, :brand,:name,CONCAT('../images/composants/stockage/',LAST_INSERT_ID()+1,'.png'), :taille, :type, :vitesse, :is_available)");
				
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
				echo" Insertion reussi ssd";
				
			}
            else{$stmt = $pdo->prepare("
                INSERT INTO composants_stockage(price,rating,brand,name_comp,img,capacite,type_comp,speed,is_available)
                VALUES ( :price, :rating, :brand,:name,CONCAT('../images/composants/stockage/',LAST_INSERT_ID()+1,'.png'), :taille, :type, :vitesse, :is_available)");
				
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
				echo" Insertion reussi ssd";
				
				}
		
				break;
		
case "board":
	$board_socket = $_POST['board_socket'];
	$board_ram = $_POST['board_ram'];

	$stmt = $pdo->prepare("
	INSERT INTO composants_board(price,rating,brand,name,img,ram,socket,is_available)
	VALUES (:price, :rating, :brand,:name,CONCAT('../images/composants/board/',LAST_INSERT_ID()+1,'.png'), :nbram, :socket, :is_available)");

	//Liaison des valeurs aux variables
	$stmt->bindParam(':name', $name);
	$stmt->bindParam(':price', $price);
	$stmt->bindParam(':brand', $brand);
	$stmt->bindParam(':rating', $rating);
	$stmt->bindParam(':is_available', $is_available);
	$stmt->bindParam(':socket', $board_socket);
	$stmt->bindParam(':nbram', $board_ram);

	//Exécution de la requête
	$stmt->execute();
	echo "insert done board";
	break;
		
    case "alim":
        $alim_wattage = $_POST['alim_wattage'];
        $alim_is_modulable = $_POST['is_modulable'];

		$stmt = $pdo->prepare("
				INSERT INTO composants_alim(price,rating,brand,name,img,is_available,is_modulable,wattage)
				VALUES (:price, :rating, :brand,:name,CONCAT('../images/composants/alim/',LAST_INSERT_ID()+1,'.png'), :is_available, :is_modulable, :wattage)");

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':is_modulable', $alim_is_modulable);
				$stmt->bindParam(':wattage', $alim_wattage);

				//Exécution de la requête
				$stmt->execute();
				echo "insert done alim";
		break;
    case "gpu":
        $gpu_vram = $_POST['gpu_ram'];
        $gpu_clock = $_POST['gpu_puiss'];
        
		$stmt = $pdo->prepare("
				INSERT INTO composants_gpu(price,rating,brand,name,img,is_available,ram,clock)
				VALUES (:price, :rating, :brand,:name,:url,LAST_INSERT_ID()+1,'.png'), :is_available, :ram, :clock)");

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':ram', $gpu_vram);
				$stmt->bindParam(':clock', $gpu_clock);
				$stmt->bindParam(':url', $url);

				//Exécution de la requête
				$stmt->execute();
				echo "insert done gpu";
        break;
    case "boiter":
        $boitier_type = $_POST['boiter_type_case'];
       
		$stmt = $pdo->prepare("
				INSERT INTO composants_boitier(price,rating,brand,name,img,is_available,type)
				VALUES (:price, :rating, :brand,:name,CONCAT('../images/composants/gpu/',LAST_INSERT_ID()+1,'.png'), :is_available, :type)");

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':type', $boitier_type);

				//Exécution de la requête
				$stmt->execute();
				echo "insert done boitier";
        break;
    case "cpu":
        $cpu_puis = $_POST['cpu_puiss'];
        $cpu_nbcore = $_POST['cpu_nbr_core'];
		$cpu_wattage = $_POST['cpu_conso'];

        $stmt = $pdo->prepare("
				INSERT INTO composants_cpu(price,rating,brand,name,img,is_available,wattage,nbcore,puissance)
				VALUES (:price, :rating, :brand,:name,CONCAT('../images/composants/gpu/',LAST_INSERT_ID()+1,'.png'), :is_available, :conso, :core, :puiss)");

				//Liaison des valeurs aux variables
				$stmt->bindParam(':name', $name);
				$stmt->bindParam(':price', $price);
				$stmt->bindParam(':brand', $brand);
				$stmt->bindParam(':rating', $rating);
				$stmt->bindParam(':is_available', $is_available);
				$stmt->bindParam(':puiss', $cpu_puis);
				$stmt->bindParam(':core', $cpu_nbcore);
				$stmt->bindParam(':conso', $cpu_wattage);

				//Exécution de la requête
				$stmt->execute();
				echo "insert done cpu";
        break;
		case "cooler":
			$cooler_type = $_POST['cooler_type'];
			$cooler_taille = $_POST['cooler_taille'];
			$cooler_speed = $_POST['cooler_speed'];
			$cooler_son = $_POST['cooler_son'];
			
	
			$stmt = $pdo->prepare("
					INSERT INTO composants_cooler(price,rating,brand,name,img,is_available,taille,son,type,speed)
					VALUES (:price, :rating, :brand,:name,CONCAT('../images/composants/gpu/',LAST_INSERT_ID()+1,'.png'), :is_available, :taille, :son, :type, :speed)");
	
					//Liaison des valeurs aux variables
					$stmt->bindParam(':name', $name);
					$stmt->bindParam(':price', $price);
					$stmt->bindParam(':brand', $brand);
					$stmt->bindParam(':rating', $rating);
					$stmt->bindParam(':is_available', $is_available);
					$stmt->bindParam(':type', $cooler_type);
					$stmt->bindParam(':taille', $cooler_taille);
					$stmt->bindParam(':speed', $cooler_speed);
					$stmt->bindParam(':son', $cooler_son);
	
					//Exécution de la requête
					$stmt->execute();
					echo "insert done cooler";
			break;
    default:
        
		echo "<p>erreur requete</p>";
        break;
};

?>