<?php
session_start();
header( 'content-type: text/html; charset=utf-8' );
include ('inclusion.php');
$l_base=tt_connectionbase();
// On met les variables utilisés du script PHP à FALSE.
$error = FALSE;

$connexionOK = FALSE;

// On regarde si l'utilisateur a bien utilisé le module de connexion pour traiter les données.
if(isset($_GET["connexion"])){
   
   // On regarde si tout les champs sont remplis. Sinon on lui affiche un message d'erreur.   
   if($_GET["email"] == NULL OR $_GET["pass"] == NULL){
      
      $error = TRUE;
      
      $errorMSG = "un des champs est vide";
      
   }
   
   // Sinon si tout les champs sont remplis alors on regarde si le nom de compte rentré existe bien dans la base de données.
   else{
      
      $sql = "SELECT * FROM inscrit WHERE add_mail =' ".$_GET["email"]."' ";
      
      $req = mysql_query($sql);
      
      // Si oui, on continue le script...      
     if($sql){
         
         // On sélectionne toute les données de l'utilisateur dans la base de données.   
         $sql = "SELECT * FROM inscrit  WHERE pass = '".$_GET["pass"]."' ";
      
         $req = mysql_query($sql);
         
         // Si la requête SQL c'est bien passé...      
         if($sql){
         
            // On récupère toute les données de l'utilisateur dans la base de données.
            $donnees = mysql_fetch_assoc($req);
             header('Location:acceuil_troctemps.php');

   
            // Si le mot de passe entré à la même valeur que celui de la base de données, on l'autorise a se connecter...         
            if($_GET["pass"] == $donnees["pass"]){
            
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
         }
        
      }
   
  }
}
  
 elseif(isset($_SESSION["email"]) AND isset($_SESSION["pass"])){
  header('Location:acceuil_troctemps.php');
  
   
   echo "Bienvenue ".$_SESSION["email"]."";
   
}
  

?>
<?php if($error == TRUE){ echo ".$errorMSG."; } ?>

<?php if($connexionOK == TRUE){ echo ".$connexionMSG."; } ?>