<!DOCTYPE html>
<html>

   <head>
    <?php include('include_head.php') ?>
 </head>
   
   <body>
        
      <h2>Connexion au site</h2>
     <div class="container-fluid">
      <form action="connexion.php" method="GET">
       
         <table>
            
            <tr>
               
               <td><label for="email"><strong>e-mail</strong></label></td>
               <td><input type="email" name="email" id="email"/></td>
               
            </tr>
            
            <tr>
               
               <td><label for="pass"><strong>Mot de passe</strong></label></td>
               <td><input type="password" name="pass" id="pass"/></td>
               
            </tr>
            
         </table>
              <input class="btn btn-block btn-primary" type="submit" name="connexion" value="Se connecter"/>
       <a href="inscription.php">  <input class="btn btn-block" type= button value="inscription"/></a>
        
      </form>
 </div>
   </body>
   
</html>