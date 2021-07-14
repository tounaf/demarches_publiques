<?php
    $servername = PARAMS['database_host'];
    $username = PARAMS['database_user'];
    $password = PARAMS['database_password'];
    $dbname = PARAMS['database_name'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Erreur de connexion: " . mysqli_connect_error());
  }

?>
