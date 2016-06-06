<?php
  //connection au serveur
 include ('inclusion.php');
 $l_base=tt_connectionbase();
  
   $nom     = $_POST["nom"] ;
   
   $prenom = $_POST["prenom"] ;

   $profession=$_POST["profession"];

   $nom_ville = $_POST["nom_ville"] ;

$cp    = $_POST["cp"] ;
   
   $rue = $_POST["rue"] ;

$add_mail    = $_POST["add_mail"] ;
   
   $telephone = $_POST["telephone"] ;

   $description =$_post["description"];

   $enregistrement  = $_POST["enregistrement"] ;
  //création de la requête SQL:
  $sql = "UPDATE inscrit
            SET nom         = '$nom', 
            prenom     = '$prenom',
      profession    = '$profession',
      nom_ville ='$nom_ville',
      cp           = '$cp',
      rue ='$rue',
      add_mail='$add_mail',
      telephone='$telephone',
      description='$description'

 WHERE num_inscrit ='21' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $l_base) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>