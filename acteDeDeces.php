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
  <a href="index.php"><i class="fa fa-home"></i></a>
  <a href="acteDeNaissance.php">Acte de naissance</a>
  <a href="casierJudiciaire.php">Extrait casier judiciaire</a>
  <a href="acteDeDeces.php" class="active">Acte de décès</a>
  <a href="acteDeMariage.php">Acte de mariage</a>
  <a href="actualites.php">Actualités</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<br>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>FORMULAIRE DE DEMANDE D'ACTE DE DECES EN LIGNE</h4>
      <p>Demarches simplifiées pour l'obtention rapide d'un acte de décès</p>
    </div>
  </div>
</div>

<!-- FORMULAIRE -->

<div class="container">
  <div class="row">
    <div class="col-md-12" >

      <div id="section1">

      <form method="post" action="traitement/acteDeDeces_insert.php">
        <!-- PARTIE 1 -->
        <div id="part1" class="box_effect_form">
          <h5 class="">1ère ETAPE - RENSEIGNEMENTS SUR L'ACTE</h5>
          <p class="">Veuillez renseigner les champs ci-après pour le traitement de votre demande d'acte de décès</p>
          <div class="form-group">
            <label class="">Vous demandez un acte de décès en tant que (*)</label>
            <select class="form-control" id="validation01" name="acte_en_tant_que">
              <option>- Choisir votre réponse -</option>
              <option>Son père - Sa mère</option>
              <option>Son époux- Son épouse</option>
              <option>Son fils - Sa fille</option>
              <option>Son grand père - Sa grand mère</option>
              <option>Son petits fils - Sa petite fille</option>
              <option>Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label class="">Quel type d'acte désirez-vous obtenir? (*)</label>
            <select class="form-control" id="validation02" name="type_acte">
              <option>- Choisir votre réponse -</option>
              <option>Copie intégrale de l’acte</option>
              <option>Extrait plurilingue</option>
            </select>
          </div>
          <div class="form-group">
            <label class="">Nombre de copies souhaitées (*)</label>
            <select class="form-control" id="validation03" name="nb_copie">
              <option>- Choisir votre réponse -</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>

        <!-- PART2 -->
        <div id="part2" class="box_effect_form" style="display: none">
          <h5 class="">2ème ETAPE - INFORMATIONS SUR L'ACTE</h5>
          <p class="">Informations sur la personne concernée par l'acte</p>
          <div class="form-group">
            <label class="">Civilité (*)</label>
            <select class="form-control" id="validation04" name="civilite">
              <option>- Choisir votre réponse -</option>
              <option>Monsieur</option>
              <option>Madame</option>
            </select>
          </div>
          <div class="form-group">
            <label class="">Nom de naissance (*)</label>
            <input class="form-control" type="" id="validation05" name="nom_naissance">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input class="form-control" type="" id="validation06" name="prenom">
          </div>
          <div class="form-group">
            <label class="">Date de naissance (*)</label>
            <input class="form-control" type="date" id="validation07" name="date_naissance">
          </div>
          <div class="form-group">
            <label class="">Ville de naissance (*)</label>
            <input class="form-control" type="" id="validation08" name="ville_naissance">
          </div>
          <div class="form-group">
            <label class="">Code postal de naissance (*)</label>
            <input class="form-control" type="" id="validation09" name="code_postal_naissance">
          </div>
          <div class="form-group">
            <label class="">Pays de naissance (*)</label>
            <input class="form-control" type="" id="validation10" name="pays_naissance">
          </div>

          <h5 class="">Informations sur le décès</h5>
          <div class="form-group">
            <label class="">Date du décès (*)</label>
            <input class="form-control" type="date" id="validation11" name="information_deces">
          </div>
          <div class="form-group">
            <label class="">Ville du décès (*)</label>
            <input class="form-control" type="" id="validation12" name="ville_deces">
          </div>
          <div class="form-group">
            <label class="">Pays du décès (*)</label>
            <input class="form-control" type="" id="validation13" name="pays_deces">
          </div>

          <hr>
          <h5 class="">Adresse de réception de l'acte</h5>
          <p>Où désirez-vous recevoir l'acte?</p>
          <div class="form-group">
            <label class="">Nom d'usage (*)</label>
            <input class="form-control" type="" id="validation14" name="nom_usage">
          </div>
          <div class="form-group">
            <label class="">Prénoms (*)</label>
            <input class="form-control" type="" id="validation15" name="prenom_acte">
          </div>
          <div class="form-group">
            <label class="">Adresse (*)</label>
            <input class="form-control" type="" id="validation16" name="adresse_acte">
          </div>
          <div class="form-group">
            <label class="">Code postal (*)</label>
            <input class="form-control" type="" id="validation17" name="code_postal_acte">
          </div>
          <div class="form-group">
            <label class="">Ville (*)</label>
            <input class="form-control" type="" id="validation18" name="ville_acte">
          </div>
          <div class="form-group">
            <label class="">Pays (*)</label>
            <input class="form-control" type=""  id="validation19" name="pays_acte">
          </div>
          <div class="form-group">
            <label class="">Adresse e-mail (*)</label>
            <input class="form-control" type="mail" id="validation20" name="email_acte">
          </div>
          <div class="form-group">
            <label class="">Téléphone (*)</label>
            <input class="form-control" type="" id="validation21" name="telephone_acte">
          </div>


          <hr>
          <h5 class="">Finalisation de la demande - Frais administratifs</h5>
          <p class="">Finalisez votre demande d'acteet obtenez votre document par courrier postal le plus tôt possible.</p>
          <p>Les frais de traitements de nos services vous permettent d'obtenir votre acte sans le moindre déplacement de votre part.</p>
          <p>Ses frais s'élèvent à 29,90€ et comprennent le traitement complet de votre dossier dont l'impression de votre demande, les vérifications, l'enregistrement et le suivi de votre dossier.</p>
          <div class="form-group">
            <input value="false" class="" name="demande_immediat" type="checkbox"  id="condition_un" required>
            <label class="label_inline" id="obligationOne">Je demande l'exécution immédiate du traitement de ma demande et renonce ainsi expressément à mon droit de rétractation pour que la prestation commence avant l'échéance du délai légal de retractation.</label>
          </div>
          <div class="form-group">
            <input value="false" name="accept_condition_generale" class="" type="checkbox" id="condition_deux" required>
            <label class="label_inline" id="obligationTwo">J’accepte les conditions générales d’utilisation et je certifie sur l’honneur l’exactitude des informations fournies. Il est rappelé que toute personne procédant à une fausse déclaration pour elle-même ou pour autrui peut s’exposer aux sanctions prévues aux articles 441-1 du code pénal et suivants.</label>
          </div>
          <button class="btn btn-success button_right" id="finaliseApplication">FINALISER LA DEMANDE</button>
        </div>

      </form>

      </div>

      <!-- Buttons -->
      <a href="#section1">
        <button class="boutton_rose button_right" id="next" style="" type="submit">ETAPE SUIVANTE</button>
      </a>
      <a href="#section1" style="text-decoration: none;">
        <button class="boutton_rose" id="previous" onclick="MyFunctionprevious()" style="display: none">Retourner</button>
      </a>

      <!-- ERROR MESSAGE -->
      <div class="alert alert-danger alert-dismissible" id="errorMessage" style="display: none;">
        <button type="button" class="close" data-dismiss="alert"></button>
        <center>
        <p><strong>(*)</strong> Merci de renseigner les champs obligatoires</p>
        </center>
      </div>

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
  <script src="assets/js/form_deces.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/sweetalert2.all.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>

</body>
</html>
