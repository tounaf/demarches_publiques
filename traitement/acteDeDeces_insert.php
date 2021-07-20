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
require_once '../parameters.php';
include('../connexion/connexion.php');

if(
  isset($_POST["acte_en_tant_que"])
  && isset($_POST["type_acte"])
  && isset($_POST["nb_copie"])
  && isset($_POST["civilite"])
  && isset($_POST["nom_naissance"])
  && isset($_POST["prenom"])
  && isset($_POST["date_naissance"])
  && isset($_POST["ville_naissance"])
  && isset($_POST["code_postal_naissance"])
  && isset($_POST["pays_naissance"])
  && isset($_POST["information_deces"])
  && isset($_POST["ville_deces"])
  && isset($_POST["pays_deces"])
  && isset($_POST["nom_usage"])
  && isset($_POST["prenom_acte"])
  && isset($_POST["adresse_acte"])
  && isset($_POST["code_postal_acte"])
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

  // Table actededeces
  $acte_en_tant_que = $_POST["acte_en_tant_que"];
  $type_acte = $_POST["type_acte"];
  $nb_copie = $_POST["nb_copie"];
  $civilite = $_POST["civilite"];
  $nom_naissance = $_POST["nom_naissance"];
  $prenom = $_POST["prenom"];
  $date_naissance = $_POST["date_naissance"];
  $ville_naissance = $_POST["ville_naissance"];
  $code_postal_naissance = $_POST["code_postal_naissance"];
  $pays_naissance = $_POST["pays_naissance"];
  $information_deces = $_POST["information_deces"];
  $ville_deces = $_POST["ville_deces"];
  $pays_deces = $_POST["pays_deces"];
  $nom_usage = $_POST["nom_usage"];
  $prenom_acte = $_POST["prenom_acte"];
  $adresse_acte = $_POST["adresse_acte"];
  $code_postal_acte = $_POST["code_postal_acte"];
  $ville_acte = $_POST["ville_acte"];
  $pays_acte = $_POST["pays_acte"];
  $email_acte = $_POST["email_acte"];
  $telephone_acte = $_POST["telephone_acte"];


$sql ="INSERT INTO actededeces (acte_en_tant_que, type_acte, nb_copie, civilite, nom_naissance, prenom, date_naissance, ville_naissance, code_postal_naissance, pays_naissance, information_deces, ville_deces, pays_deces, nom_usage, prenom_acte, adresse_acte, code_postal_acte, ville_acte, pays_acte, email_acte, telephone_acte) VALUES ('$acte_en_tant_que', '$type_acte', '$nb_copie', '$civilite', '$nom_naissance', '$prenom', '$date_naissance', '$ville_naissance', '$code_postal_naissance', '$pays_naissance', '$information_deces', '$ville_deces', '$pays_deces', '$nom_usage', '$prenom_acte', '$adresse_acte', '$code_postal_acte', '$ville_acte', '$pays_acte', '$email_acte', '$telephone_acte')";


if (mysqli_query($conn, $sql)) {
      $sqlDetails = "SELECT max(id_deces) as id FROM actededeces";
      $result = $conn->query($sqlDetails);
      $idAct = $result->fetch_assoc();
      require '../mail/swift_mailer.php';
      require '../mail/acte_deces_message.php';
      require '../mail/acte_deces_facture.php';
      require '../mail/acte_deces_details.php';

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
                window.location = '../acteDeDeces.php';
                })
            }
    </script>";

} else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s\'est produite !',
      'Veuillez entrer à nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../acteDeDeces.php';
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
