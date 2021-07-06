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
</head>
<body>

<?php

include('../connexion/connexion.php');

if(
  isset($_POST["titre"])
  && isset($_FILES["file"])
  && isset($_POST["contenu"])
  )

  $chemin = "upload/";
  $chemin = $chemin . basename( $_FILES['file']['name']);
  $titre = addslashes(trim($_POST["titre"]));
  $contenu = addslashes(trim($_POST["contenu"]));



$sql ="INSERT INTO article(titre_art, image_art, contenu_art) VALUES ('$titre', '$chemin', '$contenu')";


if (mysqli_query($conn, $sql)) {
  if(move_uploaded_file($_FILES['file']['tmp_name'], $chemin)){
      echo "
        <script type='text/javascript'>
          swal('Un nouveau article a été ajouté', '', 'success');
        </script>";
      header("location:../dashboard_articles.php");
   }

  else {
    echo "
        <script type='text/javascript'>
          swal('Une erreur s'est produite, 'Veuillez entrer à nouveau les informations', 'error');
        </script>";
      header("location:article_insert.php");
  }
} else {
    echo "
        <script type='text/javascript'>
          swal('Une erreur s'est produite, 'Veuillez entrer à nouveau les informations', 'error');
        </script>";
      header("location:article_insert.php");
}

mysqli_close($conn);

 ?>


</body>
</html>
