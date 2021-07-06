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



</head>
<body>

<!-- DRAPEAU -->
<div class="container-fluid">
  <div class="row fond_bleu pt-4">
    <div class="col-md-1"></div>
    <div class="col-md-2">
      <center>
        <img class="drapeau" src="../assets/img/drapeau.png">
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
  <a href=""><i class="fa fa-home"></i></a>
  <a href="../dashboard_articles.php" class="active">Gestion - Actualités</a>
  <a href="">Gestion - Acte de naissance</a>
  <a href="">Gestion - Extrait casier judiciaire</a>
  <a href="">Gestion - Acte de décès</a>
  <a href="">Gestion - Acte de mariage</a>
  <a href="../login.html"><i class="fa fa-power-off"> Déconnexion</i></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


  <!-- BODY -->
 <!-- LOGIN FORM -->
<div class="container pt-5">
  <div class="row article_box">
      <div class="col-md-12">
        <center>
          <div class="box_effect">
            <!-- <a href="index.php"><i class="fa fa-home"></i></a> -->
            <h2 class="">
              Formulaire de création d'article
            </h2>
          <hr>

            <form method="post" action="article_insert.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="titre" placeholder="Titre de l'article">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control pb-2" name="file">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" name="contenu" placeholder="Rédigez votre article ici..."></textarea>
                </div>
                <div>
                  <input type="submit" class="voir_actualites" value="Ajouter un article">
                  <a href="../dashboard_articles.php" class="btn btn-danger">Annuler</a>
                </div>
            </form>
          </div>
        </center>
      </div>
  </div>
</div>
  <!-- BODY -->



<!-- SCRIPTS -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/sweetalert2.all.js"></script>
  <script src="../assets/js/sweetalert2.all.min.js"></script>


</body>
</html>
