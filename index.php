<?php
  require_once 'parameters.php';
  include('connexion/connexion.php');
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
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">


<style type="text/css">
  html {
  scroll-behavior: smooth;
}
</style>


</head>
<body>

    <?php
    include("cookie.php");
    ?>


<!-- ECRITO -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <center>
        <span class="non_affilié">Site indépendant de l'administration française, offrant un service d'accompagnement pour faciliter l'obtention d'actes civils</span>
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
  <a href="index.php" class="active"><i class="fa fa-home"></i></a>
  <a href="acteDeNaissance.php">Acte de naissance</a>
  <a href="casierJudiciaire.php">Extrait casier judiciaire</a>
  <a href="acteDeDeces.php">Acte de décès</a>
  <a href="acteDeMariage.php">Acte de mariage</a>
  <a href="actualites.php">Actualités</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!-- FORMULAIRES -->

<br>

<div class="container">

  <div class="row">
    <div class="col-md-12">
      <!-- Tokony atao h2 ihany fa ovaina ny propriétés -->
      <h4><center>OBTENTION DE DOCUMENTS ADMINISTRATIFS EN LIGNE</center></h4>
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col-md-3">
      <center>
        <img class="logos" src="assets/img/caddie.png">
      </center>
      <br>
      <h5><center>ACTE DE NAISSANCE EN LIGNE</center></h5>
      <center><p>Demander une copie intégrale, un extrait avec ou sans filitation ou un extrait plurilingue de votre acte de naissance en ligne</p></center>
      <a href="acteDeNaissance.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
    <div class="col-md-3 mobile_pt">
      <center>
        <img class="logos" src="assets/img/form.png">
      </center>
      <br>
      <h5><center>EXTRAIT DE CASIER JUDICIAIRE</center></h5>
      <center><p>Demander un extrait, avec ou sans traduction de vote casier judiciaire en ligne</p></center>
      <a href="casierJudiciaire.php">
        <button class="boutton_rose bouttons_vague1">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
    <div class="col-md-3 mobile_pt">
      <center>
        <img class="logos" src="assets/img/folder.png">
      </center>
      <br>
      <h5><center>ACTE DE DÉCÈS</center></h5>
      <center><p class="textes_vague1">Demander une copie intégrale ou un extrait plurilingue d'un acte de décès en ligne</p></center>
      <a href="acteDeDeces.php">
        <button class="boutton_rose bouttons_vague1">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
    <div class="col-md-3 mobile_pt">
      <center>
        <img class="logos" src="assets/img/mariage.png">
      </center>
      <br>
      <h5><center>ACTE DE MARIAGE</center></h5>
      <center><p class="textes_vague1">Demander une copie intégrale, un extrait avec ou sans filitation ou un extrait plurilingue de votre acte de mariage en ligne</p></center>
      <a href="acteDeMariage.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-12">
      <!-- Tokony atao h2 ihany fa ovaina ny propriétés -->
      <h4><center>TRAITEMENT DE VOS DEMARCHES ADMINISTRATIVES EN 3 ETAPES</center></h4>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-4">
      <center>
        <img class="logos" src="assets/img/form1.png">
      </center>
      <br>
      <h5><center>REMPLIR VOTRE FOMULAIRE DE DEMANDE</center></h5>
      <center><p>Remplissage de vos informations à l'aide d'un formulaire simple</p></center>
    </div>
    <div class="col-md-4">
      <center>
        <img class="logos" src="assets/img/paiement.png">
      </center>
      <br>
      <h5><center>RÉGLER VOS FRAIS ADMINISTRATIFS</center></h5>
      <center><p class="logos_vague2">Règlement de vos frais administratifs via un système sécurisé</p></center>
    </div>
    <div class="col-md-4">
      <center>
        <img class="logos" src="assets/img/file.png">
      </center>
      <br>
      <h5><center>RÉCEPTION DE VOTRE DOCUMENT</center></h5>
      <center><p class="logos_vague2">Réception rapide par courrier de votre document</p></center>
    </div>
  </div>

  <hr class="separator">
  <br>

  <div class="row">
    <div class="col-md-9">
      <h5>ACTE DE NAISSANCE</h5>
      <p>Obtenez une copie intégrale, un extrait avec ou sans filitation ou un extrait plurilingue de votre acte de naissance officiel en ligne. Votre document vous sera envoyé par courrier postal sans vous déplacer à la mairie de votre naissance.</p>
    </div>
    <div class="col-md-3">
      <a href="acteDeNaissance.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-9">
      <h5>ACTE DE MARIAGE</h5>
      <p>Obtenez une copie intégrale ou un extrait avec ou sans filiation de votre acte de mariage officiel en ligne. Votre document vous sera envoyé par courrier postal à votre domicile sans que vous n'ayez à vous déplacer dans la mairie où vous vous êtes marié.</p>
    </div>
    <div class="col-md-3">
      <a href="acteDeMariage.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-9">
      <h5>ACTE DE DÉCÈS</h5>
      <p>Obtenez une copie intégrale ou un extrait plurilingue de l'acte de décès officiel en ligne d'un proche sans aucun déplacement de votre part.</p>
    </div>
    <div class="col-md-3">
      <a href="acteDeDeces.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-9">
      <h5>EXTRAIT DE CASIER JUDICIAIRE</h5>
      <p>Obtenez un extrait, avec ou sans traduction de votre casier judiciaire officiel en ligne.</p>
    </div>
    <div class="col-md-3">
      <a href="casierJudiciaire.php">
        <button class="boutton_rose">REMPLIR LE FORMULAIRE DE DEMANDE</button>
      </a>
    </div>
  </div>
  <hr>
  <br>
</div>

<!-- ACTUALITES -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h5>LES DERNIÈRES ACTUALITÉS</h5>
    </div>
  </div>
  <br>
  <div class="row">
    <?php
     if ($conn) {
       # code...
    
      $sql = "SELECT * FROM article";
      $resultat = mysqli_query($conn, $sql);
      $total_ligne = mysqli_num_rows($resultat);
      if(isset($_GET["debut"]))
      {
        $commencement = $_GET["debut"];
        $nbliste = 3;
      }
      else
      {
        $commencement = 0;
        $nbliste = 3;
      }

      $nb_page = ceil($total_ligne/$nbliste);
      $sql = "SELECT * FROM article ORDER BY id DESC LIMIT  $commencement, $nbliste";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
    ?>
    <div class="col-md-4">
      <center>
        <a href="actualites.php?id=<?php echo $row['id'] ?>">
          <img style="width: 190px; height: 248px;" src="<?php echo 'upload/'.$row['image_art'] ?>">
          <h6 class="articles"><?php echo $row['titre_art']; ?></h6>
        </a>
      </center>
    </div>
    <?php
      }
    }
     }
    ?>
  </div>
</div>

<br>

<center>
  <a href="actualites.php">
    <input type="Submit" class="voir_actualites" value="Voir toutes les actualités">
  </a>
</center>

<br>

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


  <!-- SCRIPTS -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/sweetalert2.all.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>



</body>
</html>
