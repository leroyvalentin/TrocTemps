<?php
  require('controlle_connection.php');
session_destroy();
header('location: index.php');
exit;
?>