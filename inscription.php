<!DOCTYPE html>
<html>
<head>

<?php include_once("include_head.php") ?>

<title>incrits a troctemps</title>
</head>
<body>

    <ul class="nav">
    <li class="nav-item">
        <a href="index.php"> <span class="glyphicon glyphicon-home"></span></a>
    </li>
</ul>
<form name="prenom" action="enregistrement.php" method="POST">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom"></td>
    </tr>
    <tr align="center">
      <td>prenom</td>
      <td><input type="text" name="prenom"></td>
    </tr>
     <tr align="center">
      <td>profession</td>
      <td><input type="text" name="profession"></td>
    </tr>
     <tr align="center">
      <td>sexe</td>
      <td><input type="text" name="sexe"></td>
    </tr>
     <tr align="center">
      <td>ville</td>
      <td><input type="text" name="nom_ville"></td>
    </tr>
     <tr align="center">
      <td>code postal</td>
      <td><input type="number" name="cp"></td>
    </tr>
     <tr align="center">
      <td>rue</td>
      <td><input type="text" name="rue"></td>
    </tr>
     <tr align="center">
      <td>e-mail</td>
      <td><input type="email" name="add_mail"></td>
    </tr>
      <tr align="center">
      <td>telephone a mettre sous la forme "00.00.00.00.00"</td>
      <td><input type="text" name="telephone"></td>
    </tr>
    <tr align="center">
      <td>description</td>
      <td><input type="text" name="description"></td>
    </tr>
       <tr align="center">
      <td>mot de pass</td>
      <td><input type="password" name="pass" ></td>
    </tr>
  <tr align="center">
      <td colspan="2"><input type="submit" value="inserer"></td>
    </tr>
  </table>
</form>

  </body>
</html>
