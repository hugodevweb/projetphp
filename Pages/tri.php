<?php
if (isset($_POST["prix_min"], $_POST["prix_max"],$_POST['tri'])) {
$tri = $_POST['tri'];

$order = '';
switch ($tri) {
    case 'likes_Croissant':
        $order = 'ORDER BY likes ASC';
        break;

    case 'likes_Decroissant':
        $order = 'ORDER BY likes DESC';
        break;

    case 'prix_total_Croissant':
        $order = 'ORDER BY prix_total ASC';
        break;
    case 'prix_total_Decroissant':
        $order = 'ORDER BY prix_total DESC';
        break;
}
header("Location: ./commu.php?order=" . $order."&prix_min=".$_POST["prix_min"]."&prix_max=".$_POST["prix_max"]."");
}

?>