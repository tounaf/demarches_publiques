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
  && isset($_POST["date_mariage"])
  && isset($_POST["ville_mariage"])
  && isset($_POST["code_postal_mariage"])
  && isset($_POST["pays_mariage"])
  && isset($_POST["civilite"])
  && isset($_POST["nom_naissance"])
  && isset($_POST["prenom_naissance"])
  && isset($_POST["date_naissance"])
  && isset($_POST["ville_naissance"])
  && isset($_POST["code_postal_naissance"])
  && isset($_POST["pays_naissance"])
  && isset($_POST["nationalite"])
  && isset($_POST["nom_naissance_pere"])
  && isset($_POST["prenom_pere"])
  && isset($_POST["nom_naissance_mere"])
  && isset($_POST["prenom_mere"])
  && isset($_POST["civilite_deux"])
  && isset($_POST["nom_naissance_deux"])
  && isset($_POST["prenom_deux"])
  && isset($_POST["date_naissance_deux"])
  && isset($_POST["ville_naissance_deux"])
  && isset($_POST["code_postal_naissance_deux"])
  && isset($_POST["pays_naissance_deux"])
  && isset($_POST["nationalite_deux"])
  && isset($_POST["nom_naissance_pere_deux"])
  && isset($_POST["prenom_pere_deux"])
  && isset($_POST["nom_naissance_mere_deux"])
  && isset($_POST["prenom_mere_deux"])
  && isset($_POST["nom_usage"])
  && isset($_POST["prenom_acte"])
  && isset($_POST["adresse_acte"])
  && isset($_POST["code_postal_acte"])
  && isset($_POST["ville_acte"])
  && isset($_POST["pays_acte"])
  && isset($_POST["email_acte"])
  && isset($_POST["telephone"])
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

  // Table actedemariage
  $acte_en_tant_que = $_POST["acte_en_tant_que"];
  $type_acte = $_POST["type_acte"];
  $nb_copie = $_POST["nb_copie"];
  $date_mariage = $_POST["date_mariage"];
  $ville_mariage = $_POST["ville_mariage"];
  $code_postal_mariage = $_POST["code_postal_mariage"];
  $pays_mariage = $_POST["pays_mariage"];
  $civilite = $_POST["civilite"];
  $nom_naissance = $_POST["nom_naissance"];
  $prenom_naissance = $_POST["prenom_naissance"];
  $date_naissance = $_POST["date_naissance"];
  $ville_naissance = $_POST["ville_naissance"];
  $code_postal_naissance = $_POST["code_postal_naissance"];
  $pays_naissance = $_POST["pays_naissance"];
  $nationalite = $_POST["nationalite"];
  $nom_naissance_pere = $_POST["nom_naissance_pere"];
  $prenom_pere = $_POST["prenom_pere"];
  $nom_naissance_mere = $_POST["nom_naissance_mere"];
  $prenom_mere = $_POST["prenom_mere"];
  $civilite_deux = $_POST["civilite_deux"];
  $nom_naissance_deux = $_POST["nom_naissance_deux"];
  $prenom_deux = $_POST["prenom_deux"];
  $date_naissance_deux = $_POST["date_naissance_deux"];
  $ville_naissance_deux = $_POST["ville_naissance_deux"];
  $code_postal_naissance_deux = $_POST["code_postal_naissance_deux"];
  $pays_naissance_deux = $_POST["pays_naissance_deux"];
  $nationalite_deux = $_POST["nationalite_deux"];
  $nom_naissance_pere_deux = $_POST["nom_naissance_pere_deux"];
  $prenom_pere_deux = $_POST["prenom_pere_deux"];
  $nom_naissance_mere_deux = $_POST["nom_naissance_mere_deux"];
  $prenom_mere_deux = $_POST["prenom_mere_deux"];
  $nom_usage = $_POST["nom_usage"];
  $prenom_acte = $_POST["prenom_acte"];
  $adresse_acte = $_POST["adresse_acte"];
  $code_postal_acte = $_POST["code_postal_acte"];
  $ville_acte = $_POST["ville_acte"];
  $pays_acte = $_POST["pays_acte"];
  $email_acte = $_POST["email_acte"];
  $telephone = $_POST["telephone"];


$sql ="INSERT INTO actedemariage (acte_en_tant_que, type_acte, nb_copie, date_mariage, ville_mariage, code_postal_mariage, pays_mariage, civilite, nom_naissance, prenom_naissance, date_naissance, ville_naissance, code_postal_naissance, pays_naissance, nationalite, nom_naissance_pere, prenom_pere, nom_naissance_mere, prenom_mere, nom_naissance_deux, civilite_deux, prenom_deux, date_naissance_deux, ville_naissance_deux, code_postal_naissance_deux, pays_naissance_deux, nationalite_deux, nom_naissance_pere_deux, prenom_pere_deux, nom_naissance_mere_deux, prenom_mere_deux, nom_usage, prenom_acte, adresse_acte, code_postal_acte, ville_acte, pays_acte, email_acte, telephone) VALUES ('$acte_en_tant_que', '$type_acte', '$nb_copie', '$date_mariage', '$ville_mariage', '$code_postal_mariage', '$pays_mariage', '$civilite', '$nom_naissance', '$prenom_naissance', '$date_naissance', '$ville_naissance', '$code_postal_naissance', '$pays_naissance', '$nationalite', '$nom_naissance_pere', '$prenom_pere', '$nom_naissance_mere', '$prenom_mere', '$nom_naissance_deux', '$civilite_deux', '$prenom_deux', '$date_naissance_deux', '$ville_naissance_deux', '$code_postal_naissance_deux', '$pays_naissance_deux', '$nationalite_deux', '$nom_naissance_pere_deux', '$prenom_pere_deux', '$nom_naissance_mere_deux', '$prenom_mere_deux', '$nom_usage', '$prenom_acte', '$adresse_acte', '$code_postal_acte', '$ville_acte', '$pays_acte', '$email_acte', '$telephone')";

  // var_dump($acte_en_tant_que);die();


if (mysqli_query($conn, $sql)) {
      $sqlDetails = "SELECT max(id_mariage) as id FROM actedemariage";
      $result = $conn->query($sqlDetails);
      $idAct = $result->fetch_assoc();
      $tableName = 'actedemariage';
      $whereColone = "id_mariage";
      $id = $idAct['id'].'_'.uniqid();
   echo "<script type='text/javascript'>
       Swal.fire(
      'Vos informations ont ??t?? enregistr??es',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../checkout.php?id={$id}&fill={$whereColone}&ball={$tableName}';
                })
            }
    </script>";

} else {
    echo "<script type='text/javascript'>
       Swal.fire(
      'Oops...Une erreur s\'est produite !',
      'Veuillez entrer ?? nouveau les informations',
      'error'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../acteDeMariage.php';
                })
            }
    </script>";
  // echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

 ?>

<!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>


</body>
</html>
