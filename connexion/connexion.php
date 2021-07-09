<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
  $dbname = "demarches_publiques";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Erreur de connexion: " . mysqli_connect_error());
  }

?>
