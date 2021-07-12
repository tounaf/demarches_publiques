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

include('../connexion/connexion.php');

if(
  isset($_POST["titre"])
  && isset($_FILES["file"])
  && isset($_POST["contenu"])
  && isset($_POST["date"])
  )

  $titre = addslashes(trim($_POST["titre"]));

  $file_name = $_FILES['file']['name'];
  $file_tmp_name = $_FILES['file']['tmp_name'];
  $file_destination = "../upload/".$file_name;

  $contenu = addslashes(trim($_POST["contenu"]));
  $date = trim($_POST["date"]);


$sql ="INSERT INTO article(titre_art, image_art, contenu_art, date_pub_art) VALUES ('$titre', '$file_name', '$contenu', '$date')";


if (mysqli_query($conn, $sql)) {
    if(move_uploaded_file($file_tmp_name, $file_destination)){
      echo "<script type='text/javascript'>
       Swal.fire(
      'Article ajouté !',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard_articles.php';
                })
            }
    </script>";
   } else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s'est produite !',
      'Veuillez entrer à nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = 'article_creation.php';
                })
            }
    </script>";
   }

   echo "<script type='text/javascript'>
       Swal.fire(
      'Article ajouté !',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard_articles.php';
                })
            }
    </script>";

} else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s'est produite !',
      'Veuillez entrer à nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = 'article_creation.php';
                })
            }
    </script>";
}

mysqli_close($conn);

 ?>

<!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>


</body>
</html>
