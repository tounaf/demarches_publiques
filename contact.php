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
  <link rel="shortcut icon" href="assets/favicon/favicon.ico">
  <!-- CSS & Boostrap-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">

  <!-- alerts -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>

<!-- ECRITO -->
<div class="container-fluid">
  <div class="row pt-2">
    <div class="col-md-12">
      <center>
        <p>Site indépendant de l'administration française, offrant un service d'accompagnement pour faciliter l'obtention d'actes civils</p>
      </center>
    </div>
  </div>
</div>

<!-- DRAPEAU -->
<div class="container-fluid">
  <div class="row fond_bleu pt-4">
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <center>
        <img class="drapeau" src="assets/img/drapeau.png">
        <p class="texte_blanc slogan"><i>Liberté, Egalité, Fraternité</i></p>
      </center>
    </div>
    <div class="col-md-8">
      <p class="texte_blanc nom_site">DEMARCHES-PUBLIQUES.COM</p>
      <p class="texte_blanc slogan1">Obtention de vos actes d'état civil officiels en ligne</p>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>

<!-- NAVIGATION BAR -->
<div class="topnav" id="myTopnav">
  <a href="index.php"><i class="fa fa-home"></i></a>
  <a href="acteDeNaissance.php">Acte de naissance</a>
  <a href="casierJudiciaire.php">Extrait casier judiciaire</a>
  <a href="acteDeDeces.php">Acte de décès</a>
  <a href="acteDeMariage.php">Acte de mariage</a>
  <a href="actualites.php">Actualités</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>FORMULAIRE DE DEMANDE DE CONTACT</h4>
      <p>Contactez-nous directement en remplissant le formulaire ci-dessous :</p>
    </div>
  </div>
</div>

<!-- FORMULAIRE -->

<div class="container">
  <div class="row">
    <div class="col-md-12" >

      <form method="post" action="">
        <!-- PARTIE 1 -->
        <div id="part1" class="box_effect_form">
          <div class="form-group">
            <label class="">Votre email</label>
            <input type="" class="form-control" name="">
          </div>
          <div class="form-group">
            <label class="">Motif de la demande</label>
            <input type="" class="form-control" name="">
          </div>
          <div class="form-group">
            <label class="">Votre demande</label>
            <textarea rows="4" class="form-control"></textarea>
          </div>
        </div>
        <a href="#section1">
        <button class="boutton_rose button_right" id="next" style="" type="submit">ENVOYER</button>
      </a>
      </form>

    </div>
  </div>
</div>

<!-- AVANTAGES & SERVICES  -->

<div class="container-fluid">
  <div class="row fond_gris pt-4">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <h5><center>VOS AVANTAGES : </center></h5>
      <ul>
        <li>Un formulaire de demande simplifié</li>
        <li>Un traitement de qualité de vos demandes sous 24h</li>
        <li>Un suivi personnalisé de l'avancement de vos demandes</li>
      </ul>
    </div>
    <div class="col-md-5">
      <h5><center>SERVICES INCLUS : </center></h5>
      <ul>
        <li>Une assistance permanente 7j/7</li>
        <li>L'envoi rapide de vos demandes auprès des administrations compétentes, sans le moindre déplacement de votre part</li>
        <li>Le traitement, la formalisation et l'envoi de vos demandes pour un coût total de 29,90€</li>
      </ul>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>


<!-- FOOTER -->
<footer>
  <div class="container-fluid">
    <div class="row fond_bleu pt-3">
      <div class="col-md-4"><center><p class="texte_blanc">FAQ</p></center></div>
      <div class="col-md-4"><center><p class="texte_blanc">CGV</p></center></div>
      <div class="col-md-4"><center><p class="texte_blanc">Contact</p></center></div>
    </div>
  </div>
</footer>


<script type="text/javascript">

</script>

  <!-- SCRIPTS -->
  <script src="assets/js/form.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/sweetalert2.all.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>

</body>
</html>
