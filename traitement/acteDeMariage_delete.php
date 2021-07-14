<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Charset -->
  <meta charset="utf-8">
  <!-- mobile setting -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Title -->
  <title>DEMARCHES-PUBLIQUES.COM</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="../assets/favicon/favicon.ico">
  <!-- CSS & Boostrap-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap4.min.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">

  <!-- SweatAlert  -->
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

</head>
<body>

<?php
  $id = $_GET['id'];
require_once '../parameters.php';
  include('../connexion/connexion.php');

  // sql to delete a record
  $sql = "DELETE FROM actedemariage WHERE id_mariage=$id";

  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>
       Swal.fire(
      'Suppression réussie!',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard_mariage.php';
                })
            }
    </script>";

  } else {
      echo "<script type='text/javascript'>
       Swal.fire(
      'Veuillez supprimer à nouveau',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard_mariage.php';
                })
            }
    </script>";
  }

  $conn->close();

?>

<!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>


</body>
</html>

