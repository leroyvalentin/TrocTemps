
<?php
function tt_connectionbase(){
    $base = mysql_connect ('localhost', 'root', 'coucou');  
    mysql_select_db ('TrocTemps', $base) ;
    return $base;
}

function tt_insert($nom,$prenom,$base)
 {
  //création de la requête SQL:
  $sql = "INSERT  INTO inscrit (nom, prenom)
            VALUES ( '$nom', '$prenom') " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $base) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("enregistrement correcte") ;
  }
  else
  {
    echo("enregistrement rate") ;
  }
}
?>
