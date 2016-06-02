<?php 
		include("inclusion.php");
	?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="http://localhost/TrocTemps/tt_design.css">
<title>incrits a troctemps</title>
</head>
<body>



<?php
tt_connectionbase();

// lancement de la requete
$sql = 'SELECT  nom, prenom FROM inscrit ';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on va scanner tous les tuples un par un
while ($data = mysql_fetch_array($req)) {
	// on affiche les résultats
	echo 'Nom , prenom: '.$data['nom'].'';
	echo ' '.$data['prenom'].'<br />';
}
mysql_free_result ($req);
mysql_close ();

?>
</body>
</html>