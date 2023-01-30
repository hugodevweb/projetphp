<?php
session_start();
if(isset($_GET['type'])){
    $type=$_GET['type'];
    $compo=$_GET['compo'];
    unset($_SESSION[$type]);

    header("Location: ./Composants.php?composant=".$compo."&type=".$type."");

}
else{
    echo'error';
}



?>