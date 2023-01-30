<?php
session_start();
if(isset($_GET['type']) && isset($_GET['compo'])){
    $type=$_GET['type'];
    $compo=$_GET['compo'];
    $_SESSION[$type]=$compo;
    echo $_SESSION[$type];
    header("Location: ./Composants.php?composant=".$compo."&type=".$type."");


}



?>