<?php
require_once '../parameters.php';
  include('../connexion/connexion.php');

if (!empty($_GET["id"])) {
  $id = $_GET["id"];

  $sqlVoir = "SELECT * FROM price WHERE id = $id";
  // var_dump($sqlVoir);die();
  $result = $conn->query($sqlVoir);
  $data = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">

  <!-- alerts -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>

<!-- NAVIGATION BAR -->
<div class="" id="">
  <a href="../dashboard_casier.php">
    <button class="btn btn-info" style="border-radius: 50%;"><i class="fa fa-home"></i></button>
  </a>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>FORMULAIRE DE DEMANDE DE CASIER JUDICIAIRE B3</h4>
      <p>Demarches simplifiées pour l'obtention rapide de votre casier judiciaire</p>
    </div>
  </div>
</div>

<!-- FORMULAIRE -->

<div class="container">
  <div class="row">
    <div class="col-md-12" >

      <div id="section1">

      <form method="post" action="" enctype="">
        <!-- PARTIE 1 -->
        <div id="part1" class="box_effect_form">
          <p class="">Modification de prix</p>
          <div class="form-group">
              <input type="hidden" name="price_id" value="<?= $data["id"] ?? '' ?>">
            <label class="">Prix (*)</label>
            <input type="number" class="form-control" name="price" value="<?= $data["price"] ?? '' ?>">
          </div>
        </div>
      <!-- </div> -->
          <!-- <p class="">Finalisez votre demande et obtenez votre document par courrier postal le plus tôt possible. </p>
          <p>Les frais de traitements de nos services vous permettent d'obtenir votre casier judiciaire sans le moindre déplacement de votre part.</p>
          <p>Ses frais s'élèvent à 29,90€ et comprennent le traitement complet de votre dossier dont l'impression de votre demande, les vérifications, l'enregistrement et le suivi de votre dossier. </p> -->
          <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Mettre à jour" name="update_price">
          </div>

        </div>

      </form>

      </div>


    </div>
  </div>
</div>

<?php
    if (!empty($_POST) && isset($_POST['price']) && isset($_POST['price_id']) && isset($_POST['update_price'])) {
        $id = $_POST['price_id'];
        $price = $_POST['price'];
        $sql = "UPDATE price set price = $price where id = $id";
        $result = $conn->query($sql);
        if ($result) {
            header('location: ../dashboard_price.php');
        }
        $conn->close();
    }

?>



<script type="text/javascript">

</script>

  <!-- SCRIPTS -->
  <!-- <script src="../assets/js/form_casier.js"></script> -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

</body>
</html>
