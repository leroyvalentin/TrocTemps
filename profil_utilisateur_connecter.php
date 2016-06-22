
<!DOCTYPE html>
<html>
<head>
<?php include('include_head.php') ?>
<title>liste des profil modifiable </title>
</head>
<body>
    <?php
       

  require('controlle_connection.php');
include("menu.php");

 include ('inclusion.php');
 $l_base=tt_connectionbase();
 $_SESSION["email"];


    //requête SQL:
    $sql = "SELECT num_inscrit, nom, prenom,nom_ville FROM  inscrit where add_mail='" . $_SESSION["email"] . "' ";
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $l_base ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->nom." ".$result->prenom
           ." ".$result->nom_ville
          ." </div>\n"."<div align=\"center\">"."<a href=\"formulaire_modification.php?add_mail=". $_SESSION["email"]."\">modifier</a>"." </div>\n"
       ) ;
    }
   


  ?>
  </body>
</html>