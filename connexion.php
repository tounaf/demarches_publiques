<?php
  require_once './parameters.php';
  $servername = PARAMS['localhost'];
  $username = PARAMS['root'];
  $password = PARAMS[''];
  $dbname = PARAMS['demarches_publiques'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Erreur de connexion: " . mysqli_connect_error());
  }
 ?>
