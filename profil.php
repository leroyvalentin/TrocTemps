<?php
    include("inclusion.php");
      
include("menu.php")
    
  ?>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="http://localhost/TrocTemps/tt_design.css">
<title>incrits a troctemps</title>
</head>
<body>


<?php
tt_connectionbase();
  $num_inscrit  = $_GET["num_inscrit"] ;
// lancement de la requete
 $sql = "SELECT *
            FROM tt_inscrit
      WHERE num_inscrit = ".$num_inscrit ;

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
?>
<center>
<?php
while ($data = mysql_fetch_array($req)) {
  // on affiche les résultats
  echo''.'</br>'.'<br/>'.'<br/>';
  echo 'Nom:  '.$data['nom'].'<br/>';
  echo 'Prenom: '.$data['prenom'].'<br/>';
   echo 'Sexe:  '.$data['sexe'].'<br/>';
  echo 'Profession: '.$data['profession'].'<br/>';
   echo 'addresse:  '.$data['rue'].'';
  echo ' '.$data['nom_ville'].'';
   echo '  '.$data['cp'].'<br/>';
  echo 'E-mail: '.$data['add_mail'].'<br />';
   echo 'Telephone:  '.$data['telephone'].'<br/>';
  echo 'Description: '.$data['description'].'<br />';
}
mysql_free_result ($req);
mysql_close ();
?>
<div/>
</center>
</body>
</html>
