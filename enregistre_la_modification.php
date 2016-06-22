<!DOCTYPE html>
<html>
<head>
<?php include("include_head.php") ?>
<title>liste des profil modifiable </title>
</head>
<body>
  <?php
 require('controlle_connection.php');
include("menu.php"); ?>

<?php
  //connection au serveur
  

    
 include ('inclusion.php');
session_start();
 $l_base=tt_connectionbase();

  
  
   $nom     = $_GET["nom"] ;
   
   $prenom = $_GET["prenom"] ;

   $profession=$_GET["profession"];

   $nom_ville = $_GET["nom_ville"] ;

$cp    = $_GET["cp"] ;
   
   $rue = $_GET["rue"] ;

$add_mail    = $_GET["add_mail"] ;
   
   $telephone = $_GET["telephone"] ;

 $description =$_GET["description"];

 $pass =$_GET["pass"];

     

  //création de la requête SQL:
  $sql = "UPDATE tt_inscrit
            SET nom         = '$nom', 
            prenom     = '$prenom',
      profession    = '$profession',
      nom_ville ='$nom_ville',
      cp           = '$cp',
      rue ='$rue',
      add_mail='$add_mail',
      telephone='$telephone',
    description='$description',
       pass ='$pass'
 where add_mail='" .$_SESSION["email"]. "' " ;
 print($sql);
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $l_base) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
    $_SESSION["email"]=$add_mail;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
