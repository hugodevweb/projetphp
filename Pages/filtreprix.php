<?php
if (isset($_POST["prix_min"], $_POST["prix_max"])) {
    // $prix_min = intval($_POST["prix_min"]);
    // $prix_max = intval($_POST["prix_max"]);
    // $sql = "SELECT * FROM configurations WHERE prix_total BETWEEN $prix_min AND $prix_max";
    // $result = mysqli_query($conn, $sql);
    // while ($row = mysqli_fetch_assoc($result)) {
    //     echo $row["nom_config"] . " " . $row["prix_total"] . "<br>";
    // }
    header("Location: ./commu.php?order=" . $order);

} else {
    echo "Veuillez entrer des valeurs valides pour les filtres de prix.";
}
?>