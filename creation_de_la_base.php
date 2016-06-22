<!DOCTYPE html>
<html>

   <head>
    <?php include('include_head.php') ?>
 </head>
   
   <body>
      <ul class="nav">
    <li class="nav-item">
        <a href="index.php"> <span class="glyphicon glyphicon-home"></span></a>
    </li>
</ul>
      <?php
      include ('inclusion.php');
 $l_base=tt_connectionbase();
 
$requetes="";
 
$sql=file("troctemps_script_database.sql"); // on charge le fichier SQL
foreach($sql as $l){ // on le lit
  if (substr(trim($l),0,2)!="--"){ // suppression des commentaires
    $requetes .= $l;
  }
}
 
$reqs = split(";",$requetes);// on sépare les requêtes
foreach($reqs as $req){ // et on les éxécute
  if (!mysql_query($req,$l_base) && trim($req)!=""){
    die("ERROR : ".$req); // stop si erreur 
  }
}
echo "base a été créer , si elle exister déjà elle a été restaurée";
?>

 </body>
   
</html>
