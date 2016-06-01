<?php
include ('inclusion.php');
 
  // //récupération des valeurs des champs:
  
   $nom     = $_POST["nom"] ;
   
   $prenom = $_POST["prenom"] ;
  

$l_base=tt_connectionbase();

 
 tt_insert($nom,$prenom,$l_base);
?>

   