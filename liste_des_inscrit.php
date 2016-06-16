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


 $num_inscrit='num_inscrit';
    //requête SQL:
    $sql = "SELECT num_inscrit, nom, prenom,nom_ville
        FROM  inscrit
        ORDER BY nom" ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $l_base ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
           "<div align=\"center\">"
           .$result->nom." ".$result->prenom
           ." ".$result->nom_ville
          ." <a href=\"profil.php?num_inscrit=".$result->$num_inscrit."\">profil</a></div>\n"
       ) ;
    }

  
  ?>
  </body>
</html>

