<?php
  include('../connexion/connexion.php');

if (!empty($_GET["id"])) {
  $id = $_GET["id"];

  $sqlVoir = "SELECT * FROM actedemariage WHERE id_mariage = $id";
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
  <a href="../dashboard_mariage.php">
    <button class="btn btn-info" style="border-radius: 50%;"><i class="fa fa-home"></i></button>
  </a>
</div>

<br>

<!-- FORMULAIRE -->

<div class="container">
  <div class="row">
    <div class="col-md-12" >

      <div id="section1">

      <form method="post" action="traitement/acteDeMariage_insert.php">
        <!-- PARTIE 1 -->
        <div id="part1" class="box_effect_form">
          <h5 class="">1ère ETAPE - RENSEIGNEMENTS SUR L'ACTE</h5>
          <p class="">Veuillez renseigner les champs ci-après pour le traitement de votre demande d'acte de naissance</p>
          <div class="form-group">
            <label class="">Vous demandez un acte de mariage en tant que (*)</label>
            <input disabled class="form-control" name="acte_en_tant_que" value="<?= isset($data["acte_en_tant_que"])? $data["acte_en_tant_que"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Quel type d'acte désirez-vous obtenir? (*)</label>
            <input disabled class="form-control" name="type_acte" value="<?= isset($data["type_acte"])? $data["type_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Nombre de copies souhaitées (*)</label>
            <input disabled class="form-control" name="nb_copie" value="<?= isset($data["nb_copie"])? $data["nb_copie"]: '' ?>">
          </div>
        <!-- </div> -->

        <!-- PART2 -->
        <!-- <div id="part2" class="box_effect_form" style="display: none"> -->
          <h5 class="">2ème ETAPE - INFORMATIONS SUR L'ACTE</h5>
          <p class="">Informations sur le mariage</p>
          <div class="form-group">
            <label class="">Date du mariage (*)</label>
            <input disabled class="form-control" name="date_mariage" value="<?= isset($data["date_mariage"])? $data["date_mariage"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Ville du mariage (*)</label>
            <input disabled class="form-control" name="ville_mariage" value="<?= isset($data["ville_mariage"])? $data["ville_mariage"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Code postal du ville du mariage (*)</label>
            <input disabled class="form-control" name="code_postal_mariage" value="<?= isset($data["code_postal_mariage"])? $data["code_postal_mariage"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Pays du mariage (*)</label>
            <input disabled class="form-control" name="pays_mariage" value="<?= isset($data["pays_mariage"])? $data["pays_mariage"]: '' ?>">
          </div>

          <h5 class="">Informations sur le 1er conjoint</h5>
          <hr>
          <div class="form-group">
            <label class="">Civilité (*)</label>
            <input disabled class="form-control" name="civilite" value="<?= isset($data["civilite"])? $data["civilite"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Nom de naissance (*)</label>
            <input disabled class="form-control" name="nom_naissance" value="<?= isset($data["nom_naissance"])? $data["nom_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_naissance" value="<?= isset($data["prenom_naissance"])? $data["prenom_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Date de naissance (*)</label>
            <input disabled class="form-control" name="date_naissance" value="<?= isset($data["date_naissance"])? $data["date_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Ville de naissance (*)</label>
            <input disabled class="form-control" name="ville_naissance" value="<?= isset($data["ville_naissance"])? $data["ville_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Code postal de naissance (*)</label>
            <input disabled class="form-control" name="code_postal_naissance" value="<?= isset($data["code_postal_naissance"])? $data["code_postal_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Pays de naissance (*)</label>
            <input disabled class="form-control" name="pays_naissance" value="<?= isset($data["pays_naissance"])? $data["pays_naissance"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Nationalité (*)</label>
            <input disabled class="form-control" name="nationalite" value="<?= isset($data["nationalite"])? $data["nationalite"]: '' ?>">
          </div>

          <h5 class="">Informations sur les parents du 1er conjoint</h5>
          <p>Filiation paternelle</p>
          <div class="form-group">
            <label class="">Nom de naissance du père (*)</label>
            <input disabled class="form-control" name="nom_naissance_pere" value="<?= isset($data["nom_naissance_pere"])? $data["nom_naissance_pere"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_pere" value="<?= isset($data["prenom_pere"])? $data["prenom_pere"]: '' ?>">
          </div>
          <p>Filiation paternelle</p>
          <div class="form-group">
            <label class="">Nom de naissance de la mère (*)</label>
            <input disabled class="form-control" name="nom_naissance_mere" value="<?= isset($data["nom_naissance_mere"])? $data["nom_naissance_mere"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_mere" value="<?= isset($data["prenom_mere"])? $data["prenom_mere"]: '' ?>">
          </div>

          <h5 class="">Informations sur le 2nd conjoint</h5>
          <hr>
          <div class="form-group">
            <label class="">Civilité (*)</label>
            <input disabled class="form-control" name="civilite_deux" value="<?= isset($data["civilite_deux"])? $data["civilite_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Nom de naissance (*)</label>
            <input disabled class="form-control" name="nom_naissance_deux" value="<?= isset($data["nom_naissance_deux"])? $data["nom_naissance_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_deux" value="<?= isset($data["prenom_deux"])? $data["prenom_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Date de naissance (*)</label>
            <input disabled class="form-control" name="date_naissance_deux" value="<?= isset($data["date_naissance_deux"])? $data["date_naissance_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Ville de naissance (*)</label>
            <input disabled class="form-control" name="ville_naissance_deux" value="<?= isset($data["ville_naissance_deux"])? $data["ville_naissance_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Code postal de naissance (*)</label>
            <input disabled class="form-control" name="code_postal_naissance_deux" value="<?= isset($data["code_postal_naissance_deux"])? $data["code_postal_naissance_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Pays de naissance (*)</label>
            <input disabled class="form-control" name="pays_naissance_deux" value="<?= isset($data["pays_naissance_deux"])? $data["pays_naissance_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Nationalité (*)</label>
            <input disabled class="form-control" name="nationalite_deux" value="<?= isset($data["nationalite_deux"])? $data["nationalite_deux"]: '' ?>">
          </div>

          <h5>Informations sur les parents du 2nd conjoint</h5>
          <p>Filiation paternelle</p>
          <div class="form-group">
            <label class="">Nom de naissance du père (*)</label>
            <input disabled class="form-control" name="nom_naissance_pere_deux" value="<?= isset($data["nom_naissance_pere_deux"])? $data["nom_naissance_pere_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_pere_deux" value="<?= isset($data["prenom_pere_deux"])? $data["prenom_pere_deux"]: '' ?>">
          </div>
          <p>Filiation maternelle</p>
          <div class="form-group">
            <label class="">Nom de naissance de la mère (*)</label>
            <input disabled class="form-control" name="nom_naissance_mere_deux" value="<?= isset($data["nom_naissance_mere_deux"])? $data["nom_naissance_mere_deux"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_mere_deux" value="<?= isset($data["prenom_mere_deux"])? $data["prenom_mere_deux"]: '' ?>">
          </div>

          <hr>
          <h5>Adresse de réception de l'acte</h5>
          <p>Où désirez-vous recevoir l'acte?</p>
          <div class="form-group">
            <label class="">Nom d'usage (*)</label>
            <input disabled class="form-control" name="nom_usage" value="<?= isset($data["nom_usage"])? $data["nom_usage"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input disabled class="form-control" name="prenom_acte" value="<?= isset($data["prenom_acte"])? $data["prenom_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Adresse (*)</label>
            <input disabled class="form-control" name="adresse_acte" value="<?= isset($data["adresse_acte"])? $data["adresse_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Code postal (*)</label>
            <input disabled class="form-control" name="code_postal_acte" value="<?= isset($data["code_postal_acte"])? $data["code_postal_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Ville (*)</label>
            <input disabled class="form-control" name="ville_acte" value="<?= isset($data["ville_acte"])? $data["ville_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Pays (*)</label>
            <input disabled class="form-control" name="pays_acte" value="<?= isset($data["pays_acte"])? $data["pays_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Adresse e-mail (*)</label>
            <input disabled class="form-control" name="email_acte" value="<?= isset($data["email_acte"])? $data["email_acte"]: '' ?>">
          </div>
          <div class="form-group">
            <label class="">Téléphone (*)</label>
            <input disabled class="form-control" name="telephone" value="<?= isset($data["telephone"])? $data["telephone"]: '' ?>">
          </div>


          <hr>
          <h5 class="">Finalisation de la demande - Frais administratifs</h5>
          <!-- <p class="">Finalisez votre demande et obtenez votre document par courrier postal le plus tôt possible.</p>
          <p>Les frais de traitements de nos services vous permettent d'obtenir votre  sans le moindre déplacement de votre part.</p>
          <p>Ses frais s'élèvent à 29,90€ et comprennent le traitement complet de votre dossier dont l'impression de votre demande, les vérifications, l'enregistrement et le suivi de votre dossier.</p> -->
          <div class="form-group">
            <input disabled value="false" checked type="checkbox" name="demande_immediat">
            <label class="label_inline" id="obligationOne">Je demande l'exécution immédiate du traitement de ma demande et renonce ainsi expressément à mon droit de rétractation pour que la prestation commence avant l'échéance du délai légal de retractation.</label>
          </div>
          <div class="form-group">
            <input disabled value="false" checked type="checkbox" name="demande_immediat">
            <label class="label_inline" id="obligationTwo">J’accepte les conditions générales d’utilisation et je certifie sur l’honneur l’exactitude des informations fournies. Il est rappelé que toute personne procédant à une fausse déclaration pour elle-même ou pour autrui peut s’exposer aux sanctions prévues aux articles 441-1 du code pénal et suivants.</label>
          </div>

        </div>

      </form>

      </div>




    </div>
  </div>
</div>




<script type="text/javascript">

</script>

  <!-- SCRIPTS -->
  <!-- <script src="../assets/js/form_mariage.js"></script> -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>

</body>
</html>

