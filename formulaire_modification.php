<!DOCTYPE html>
<html>
<head>
<?php include("include_head.php") ?>
<title>liste des profil modifiable </title>
</head>
<body>
  <?php
include("menu.php"); ?>

<?php
 include ('inclusion.php');
 $l_base=tt_connectionbase();
 require('controlle_connection.php');
 
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $email  = $_GET["add_mail"] ;

  //requête SQL:
   $sql = "SELECT * FROM  tt_inscrit where add_mail='" .$email. "' ";
 
  //exécution de la requête:
  $requete = mysql_query( $sql, $l_base ) ;
 
  //affichage des données:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="enregistrement" action="enregistre_la_modification.php" method="get">
  <input type="hidden" name="email" value="<?php echo($email) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
   <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom" value="<?php echo($result->nom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prenom</td>
      <td><input type="text" name="prenom" value="<?php echo($result->prenom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prefession</td>
      <td><input type="text" name="profession" value="<?php echo($result->profession) ;?>"></td>
    </tr>
    <tr align="center">
      <td>code postal</td>
      <td><input type="number" name="cp" value="<?php echo($result->cp) ;?>"></td>
    </tr>
    <tr align="center">
      <td>rue</td>
      <td><input type="text" name="rue" value="<?php echo($result->rue) ;?>"></td>
    </tr>
    <tr align="center">
      <td>addresse mail</td>
      <td><input type="email" name="add_mail" value="<?php echo($result->add_mail) ;?>"></td>
    </tr>
    <tr align="center">
      <td>nom_ville</td>
      <td><input type="text" name="nom_ville" value="<?php echo($result->nom_ville) ;?>"></td>
    </tr>
    <tr align="center">
      <td>telephone</td>
      <td><input type="text" name="telephone" value="<?php echo($result->telephone) ;?>"></td>
    </tr>
    <tr align="center">
      <td>description</td>
      <td><input type="text" name="description" value="<?php echo($result->description) ;?>"></td>
    </tr>
      <tr align="center">
      <td>mot de passe</td>
      <td><input type="password" name="pass" value="<?php echo($result->pass) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>


<?php  
  } 
  ?>

</body>
</html>
