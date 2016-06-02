<?php

 
  // //récupération des valeurs des champs:
  // //nom:
  // $nom     = $_POST["nom"] ;
  // //prenom:
  // $prenom = $_POST["prenom"] ;
  
include ('inclusion.php');
$l_base=tt_connectionbase();

 
 tt_insert('$nom','$prenom',$l_base);
?>

   