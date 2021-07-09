<?php
session_start();
if(isset($_SESSION['user']))
{
  session_destroy();
}

?>

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
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <!-- CSS & Boostrap-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">

  <!-- SweatAlert -->
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

</head>
<body>
<?php
  if (isset($_POST['identifiant'])&& isset($_POST['password'])) {
    $login = $_POST['identifiant'];
    $mdp = $_POST['password'];


  include('../connexion/connexion.php');

  $sql = "SELECT * FROM login WHERE login_identifiant = '$login' AND login_password='$mdp'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if ($row) {
    $_SESSION['user'] = 'admin';
    header("location:../dashboard_articles.php");
  }else{
    echo "<script type='text/javascript'>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Veuillez contacter l \'administrateur du site!'
        });
        var btnSwalls = document.getElementsByClassName('swal2-confirm');
        for(var i = 0; i<btnSwalls.length; i++)
        {
          btnSwalls[i].addEventListener('click', function(e){
            e.preventDefault();
            window.location = '../login.html';
            })
        }
      </script>";
  }
  }
  else
  {
    header("location:../login.html");
  }
  mysqli_close($conn);
 ?>


  <!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>




</body>
</html>

