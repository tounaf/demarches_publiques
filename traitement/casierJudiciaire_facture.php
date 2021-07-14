<?php
require_once '../parameters.php';
  include('../connexion/connexion.php');

if (!empty($_GET["id"])) {
  $id = $_GET["id"];

  $sqlVoir = "SELECT * FROM casierjudiciaire WHERE id_casier = $id";
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
  <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
  <link rel="stylesheet" type="text/css" href="../assets/css/test_style.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="../assets/fonticons/css/font-awesome.min.css">


  <!-- template -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.height {
    min-height: 200px;
}

.icon {
    font-size: 47px;
    color: #5CB85C;
}

.iconbig {
    font-size: 77px;
    color: #5CB85C;
}

.table > tbody > tr > .emptyrow {
    border-top: none;
}

.table > thead > tr > .emptyrow {
    border-bottom: none;
}

.table > tbody > tr > .highrow {
    border-top: 3px solid;
}

.box_effect_form {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  padding: 40px;
  /*padding-bottom: 55px;*/
  margin-bottom: 30px;
  /*border-radius: 15px;*/
}

</style>

</head>
<body>
<!-- NAVIGATION BAR -->
<div class="container-fluid pt-2" id="">
  <a href="../dashboard_casier.php">
    <button class="btn btn-info" style="border-radius: 50%;"><i class="fa fa-home"></i></button>
  </a>
</div>

<div class="container">
    <div class="box_effect_form">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h2>Facture N° # <input style="text-align: center; width: 130px;" disabled class="" name="id_casier" value="<?= isset($data["id_casier"])? $data["id_casier"]: '' ?>"></h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-3 col-lg-3 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">INFORMATIONS SOCIETE</div>
                        <div class="panel-body">
                            <strong>DEMARCHES-PUBLIQUES.COM</strong><br>
                            Adresse<br>
                            Ville<br>
                            Contact<br>
                            Mail<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-md-3 col-lg-3 pull-right">
                    <div class="panel panel-default height">
                        <div class="panel-heading">INFORMATIONS DEMANDEUR</div>
                        <div class="panel-body">
                            <span><?php echo date('Y/m/d') ?></span><br>
                            <span><?= isset($data["nom_usage"])? $data["nom_usage"]: '' ?></span><br>
                            <span><?= isset($data["prenom_casier"])? $data["prenom_casier"]: '' ?></span><br>
                            <span><?= isset($data["email_acte"])? $data["email_acte"]: '' ?></span><br>
                            <span><?= isset($data["telephone_acte"])? $data["telephone_acte"]: '' ?></span><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center"><strong>Résumé de la commande</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Designation</strong></td>
                                    <td class="text-center"><strong>PU</strong></td>
                                    <td class="text-right"><strong>TOTAL</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ETAT CIVIL</td>
                                    <td class="text-center">29,9€</td>
                                    <td class="text-right">29,90€</td>
                                </tr>
                                <tr>
                                    <td class="highrow"></td>
                                    <td class="highrow"><strong>Pénalités de retard (taux annuel) : 10,05 %</strong></td>
                                    <td class="highrow"></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"><strong>Escompte pour paiement anticipé (taux mensuel) : 1,5 %</strong></td>
                                    <td class="emptyrow"></td>
                                </tr>
                                <tr>
                                    <td class="emptyrow"></td>
                                    <td class="emptyrow"><strong>Indemnité forfaitaire pour frais de recouvrement en cas de retard de paiement : 40,00 €</strong></td>
                                    <td class="emptyrow"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>





  <!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

</body>
</html>
