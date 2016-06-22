<!DOCTYPE html>
<html>

   <head>
    <?php include('include_head.php') ?>
 </head>
   
   <body>
        
      <h1>Connexion au site</h1>
      

 
<?php
include ('inclusion.php');
$l_base=tt_connectionbase();
// On met les variables utilisés du script PHP à FALSE.
$error = FALSE;
$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if(isset($_GET["connexion"])){
   
   // On regarde si tous les champs sont remplis. Sinon on lui affiche un message d'erreur.   
   if( !( isset($_GET["email"]) AND !empty($_GET["email"]) ) OR
       !( isset($_GET["pass"]) AND !empty($_GET["pass"]) ) )
    {
      
      $error = TRUE;
      
      $errorMSG = "un des champs est vide";
      
   }
   
   // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
   else{
      
      $sql = "SELECT * FROM tt_inscrit WHERE add_mail ='".$_GET["email"]."'";

  
      $req = mysql_query($sql);
      $numrows=mysql_num_rows( $req);
      
      // Si oui, on continue le script...      
     if( $numrows != 0 ){
         
            // On récupère toute les données de l'utilisateur dans la base de données.
            $donnees = mysql_fetch_assoc($req);

   
            // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
            if($_GET["pass"] == $donnees["pass"]){

            session_start();
            
               $connexionOK = TRUE;
               
               $connexionMSG = " Vous êtes désormais connecté ";

              $_SESSION["email"] = $_GET["email"];
               
               $_SESSION["pass"] = $_GET["pass"];
            
            }
            
            // Sinon on lui affiche un message d'erreur.
            else{
            
               $error = TRUE;
            
               $errorMSG = "e-mail ou mot de passe incorrect";
            
            }
        
      }// email present
        else {
        $error = TRUE;
        $errorMSG = " email non trouvé dans la base";
    } 
   
  } // email and pass setok
}// if isset connexion`
  
if(isset($_SESSION["email"]) AND isset($_SESSION["pass"])){
  header('Location:acceuil_troctemps.php');
   
}
  

?>


     <div class="container-fluid">
      <form  action="index.php" method="GET">
       
         <table>
               
            <tr>
               <td><span class="glyphicon glyphicon-envelope"></span><input type="email" name="email" placeholder="e-mail" id="email"/></td>
               <td><span class="glyphicon glyphicon-certificate"></span><input type="password" name="pass" placeholder="Mot de passe" id="pass"/></td>
            </tr>
           
            
         </table>
<div class="error">
         <?php if($error == TRUE){ echo ".$errorMSG."; } ?>

<?php if($connexionOK == TRUE){ echo ".$connexionMSG."; } ?>
</div>

              <input class="btn  btn-primary" type="submit" name="connexion"  value="Se connecter"/>
       <a href="inscription.php">  <input class="btn " type= button value="inscription"/></a>
          <a href="creation_de_la_base.php">  <input class="btn  " type= button value=" creation des parametre de connexion à la base de données"/></a>
      </form>
 </div>

   </body>
   
</html>
