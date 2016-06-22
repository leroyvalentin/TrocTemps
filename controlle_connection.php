<?php
include_once("inclusion.php");
if( !( isset($_SESSION["email"]) AND !empty($_SESSION["email"]) ))
   {
    // La variable $_SESSION['email'] n'existe pas, ou bien elle est vide
    // <=> la personne ne s'est PAS connectée
    echo '<p>Vous devez vous <a href="index.php">connecter</a>.</p>'."\n";
    exit();
}
?>
