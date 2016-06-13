<html>

  <head>
    <title>enregistrement </title>
  	
  

     <link rel="stylesheet" type="text/css" href="http://localhost/TrocTemps/tt_design.css">

    
</head>

<body>
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

$pass=($_POST["pass"]);

$l_base=tt_connectionbase();

 
 tt_insert($nom,$prenom,$profession,$sexe,$nom_ville,$cp,$rue,$add_mail,$telephone,$description,$pass,$l_base);
?>

   