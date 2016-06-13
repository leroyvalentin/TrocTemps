  <html>

   <head>
      
     <link rel="stylesheet" type="text/css" href="http://localhost/TrocTemps/tt_design.css">


    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">

      <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1">
   </head>
   
   <body>
    <?php
    session_start(); // ici on continue la session
    if ((!isset($_SESSION['email'])) || ($_SESSION['email'] == ''))
    {
    	// La variable $_SESSION['login'] n'existe pas, ou bien elle est vide
    	// <=> la personne ne s'est PAS connectée
    	echo '<p>Vous devez vous <a href="index.php">connecter</a>.</p>'."\n";
    	exit();
    }
    ?>
     
   </body>
   
</html>