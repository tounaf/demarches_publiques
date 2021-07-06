<!DOCTYPE html>
<html>
<head>
	<title></title>

  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>Dashboard</title>
  <link rel="shortcut icon" href="../assets/favicon/favicon.ico">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap5/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/ionicons.min.css">

  <!-- Fonts & Fonticons -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">
  <!-- Sweatalerts -->
  <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>



<?php
	include('../connexion/connexion.php');

	if (!empty($_GET["id"])) {
	 	$id = $_GET["id"];
		$sqlDelete = "DELETE FROM demande_billet WHERE passager_id = $id;
					  DELETE FROM profession WHERE id = $id;
					  DELETE FROM symptome_has_passager WHERE passager_id = $id;
					  DELETE FROM passager WHERE id = $id";

		$result = $conn->query($sqlDelete);


    // Function definition
    function function_alert($message) {
      // Display the alert box
      $message = "The information has been successfully removed" ;
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    // Function call
    function_alert($message);
		header("location: ../dashboard.php");
	}
?>



</body>
</html>
