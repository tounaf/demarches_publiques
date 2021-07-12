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
  isset($_POST["lieu_naissance"])
  && isset($_POST["adresse"])
  && isset($_POST["traduction"])
  && isset($_POST["langue_traduction"])
  && isset($_POST["civilite"])
  && isset($_POST["nom_naissance"])
  && isset($_POST["prenom"])
  && isset($_POST["date_naissance"])
  && isset($_POST["ville_naissance"])
  && isset($_POST["code_postal"])
  && isset($_POST["pays_naissance"])
  && isset($_FILES["piece_un"])
  && isset($_FILES["piece_deux"])
  && isset($_FILES["piece_trois"])
  && isset($_FILES["piece_quatre"])
  && isset($_POST["nom_usage"])
  && isset($_POST["prenom_casier"])
  && isset($_POST["adresse_casier"])
  && isset($_POST["code_postal_casier"])
  && isset($_POST["ville_acte"])
  && isset($_POST["pays_acte"])
  && isset($_POST["email_acte"])
  && isset($_POST["telephone_acte"])
  )

  // Conditions des checkboxs
  if (!empty($_POST["demande_immediat"])) {
    $demande_immediat = "true";
  }else{
    $demande_immediat = "false";
  }
  if (!empty($_POST["accept_condition_generale"])) {
    $accept_condition_generale = "true";
  }else{
    $accept_condition_generale = "false";
  }

  // Table casierjudiciaire
  $lieu_naissance = $_POST["lieu_naissance"];
  $adresse = $_POST["adresse"];
  $traduction = $_POST["traduction"];
  $langue_traduction = $_POST["langue_traduction"];
  $civilite = $_POST["civilite"];
  $nom_naissance = $_POST["nom_naissance"];
  $prenom = $_POST["prenom"];
  $date_naissance = $_POST["date_naissance"];
  $ville_naissance = $_POST["ville_naissance"];
  $code_postal = $_POST["code_postal"];
  $pays_naissance = $_POST["pays_naissance"];
  // Fichier UN
  $file_name_un = $_FILES['piece_un']['name'];
  $file_tmp_name_un = $_FILES['piece_un']['tmp_name'];
  $file_destination_un = "../casierJudiciaire/".$file_name_un;
  // Fichier DEUX
  $file_name_deux = $_FILES['piece_deux']['name'];
  $file_tmp_name_deux = $_FILES['piece_deux']['tmp_name'];
  $file_destination_deux = "../casierJudiciaire/".$file_name_deux;
  // Fichier TROIS
  $file_name_trois = $_FILES['piece_trois']['name'];
  $file_tmp_name_trois = $_FILES['piece_trois']['tmp_name'];
  $file_destination_trois = "../casierJudiciaire/".$file_name_trois;
  // Fichier QUATRE
  $file_name_quatre = $_FILES['piece_quatre']['name'];
  $file_tmp_name_quatre = $_FILES['piece_quatre']['tmp_name'];
  $file_destination_quatre = "../casierJudiciaire/".$file_name_quatre;

  $nom_usage = $_POST["nom_usage"];
  $prenom_casier = $_POST["prenom_casier"];
  $adresse_casier = $_POST["adresse_casier"];
  $code_postal_casier = $_POST["code_postal_casier"];
  $ville_acte = $_POST["ville_acte"];
  $pays_acte = $_POST["pays_acte"];
  $email_acte = $_POST["email_acte"];
  $telephone_acte = $_POST["telephone_acte"];


$sql ="INSERT INTO casierjudiciaire (lieu_naissance, adresse, traduction, langue_traduction, civilite, nom_naissance, prenom, date_naissance, ville_naissance, code_postal, pays_naissance, piece_un, piece_deux, piece_trois, piece_quatre, nom_usage, prenom_casier, adresse_casier, code_postal_casier, ville_acte, pays_acte, email_acte, telephone_acte) VALUES ('$lieu_naissance', '$adresse', '$traduction', '$langue_traduction', '$civilite', '$nom_naissance', '$prenom', '$date_naissance', '$ville_naissance', '$code_postal', '$pays_naissance', '$file_name_un', '$file_name_deux', '$file_name_trois', '$file_name_quatre', '$nom_usage', '$prenom_casier', '$adresse_casier', '$code_postal_casier', '$ville_acte', '$pays_acte', '$email_acte', '$telephone_acte')";

// var_dump($sql);die();

if (mysqli_query($conn, $sql)) {
  // FICHIER UN
   if(move_uploaded_file($file_tmp_name_un, $file_destination_un)){
    echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont été enregistrées',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../casierJudiciaire.php';
                })
            }
    </script>";
   }
   // FICHIER DEUX
   if(move_uploaded_file($file_tmp_name_deux, $file_destination_deux)){
    echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont été enregistrées',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../casierJudiciaire.php';
                })
            }
    </script>";
   }
   // FICHIER TROIS
   if(move_uploaded_file($file_tmp_name_trois, $file_destination_trois)){
    echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont été enregistrées',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../casierJudiciaire.php';
                })
            }
    </script>";
   }
   // FICHIER QUATRE
   if(move_uploaded_file($file_tmp_name_quatre, $file_destination_quatre)){
    echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont été enregistrées',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../casierJudiciaire.php';
                })
            }
    </script>";
   }

    echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont été enregistrées',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../casierJudiciaire.php';
                })
            }
    </script>";

} else {
    // echo "<script type='text/javascript'>
    //    Swal.fire(
    //   'Oops...Une erreur s\'est produite !',
    //   'Veuillez entrer à nouveau les informations',
    //   'error'
    // );
    // var btnSwalls = document.getElementsByClassName('swal2-confirm');
    //         for(var i = 0; i<btnSwalls.length; i++)
    //         {
    //           btnSwalls[i].addEventListener('click', function(e){
    //             e.preventDefault();
    //             window.location = '../casierJudiciaire.php';
    //             })
    //         }
    // </script>";
}

mysqli_close($conn);

 ?>

<!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>


</body>
</html>
