<?php
include ('inclusion.php');
 
  // //récupération des valeurs des champs:
  
   $nom     = $_POST["nom"] ;
   
   $prenom = $_POST["prenom"] ;

   $profession=$_POST["profession"];

   $sexe     = $_POST["sexe"] ;
   
   $nom_ville = $_POST["nom_ville"] ;

$cp    = $_POST["cp"] ;
   
   $rue = $_POST["rue"] ;

$add_mail    = $_POST["add_mail"] ;
   
   $telephone = $_POST["telephone"] ;

   $description  = $_POST["description"] ;


$l_base=tt_connectionbase();

 
 tt_insert($nom,$prenom,$profession,$sexe,$nom_ville,$cp,$rue,$add_mail,$telephone,$description,$l_base);
?>

   