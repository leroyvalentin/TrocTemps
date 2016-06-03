
<html>
<head>
 <link rel="stylesheet" type="text/css" href="http://localhost/TrocTemps/tt_design.css">
<title>liste des profil modifiable </title>
</head>
<body> <?php
 include ('inclusion.php');
 $l_base=tt_connectionbase();

 $num_inscrit="num_inscrit";
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
           ." ".$result->nom_ville." <a href=\"formulaire_modification.php?identifiant=$num_inscrit".$result->$num_inscrit."\">modifier</a></div>\n"
       ) ;
    }
  ?>


	</body>
</html>
