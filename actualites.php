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

#post {
  height: 100%;
  top:100px;
  padding: 25px;
}

#post .post-content {
  background: #fff;
  margin: 15px;
  box-shadow: 0 0 5px 3px rgba(0,0,0,.15);
}
#post .post-content .post-image {
  padding: 15px;
}
#post .post-content .post-image img {
  width: 200px;
  height: 200px;
}
#post .post-content .post-detail {
  padding: 15px;
}

.btn-post {
  background: #07518b;
  color: #fff;
  margin: 15px 25px;
}
.btn-post:hover {
  border: 1px solid #07518b;
  background-color: transparent;
  color: #07518b;
}
#post .post-pagination .pagination {
  justify-content: center;
}
.post-create {
  background-color: #f1f1f1;
}
.create .navbar-menu {
    padding: 40px 0 0 90px;
}
#post .table th {
  text-align: center;
  vertical-align: middle;
}
#post .table button {
  margin: 10px;
}
.article-img {
  margin-bottom: 35px;
  position: relative;
}
.article-img img {
  width: 100%;
}
.article-info {
  position: absolute;
  background: #72ccd4;
  padding: 15px 45px;
  border-radius: 50px;
  bottom: -25px;
  left: 30%;
  display: inline-block;
}
.article-info span {
  margin:0  15px
}

.li_titres {
  list-style-type: circle;
}

a {
  color: grey;
  text-decoration: none;
}

a:hover {
  color: black;
  text-decoration: none;
}

</style>

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
  <a href="actualites.php" class="active">Actualités</a>
  <a href="contact.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<!-- actualites -->

<br>

<div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-lg-3">
            <aside id="filter">
              <h3><b>Historique</b></h3>
              <div class="actu-filter">
                <div class="check-filter">
                  <ul>

                <?php

                  $sql = "SELECT * FROM article ORDER BY id ASC";
                  $result = mysqli_query($conn, $sql);

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                 ?>
                  <li class="li_titres"><a href="actualites_voir.php?id=<?php echo $row['id']; ?>"><?php echo $row['titre_art']; ?></a></li>

                <?php
                    }
                  }
                ?>

                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-md-12 col-lg-9">
            <section id="post">
                  <?php
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
                    <div class="post-content">
                      <div class="row">
                        <div class="col-md-4 col-sm-12">
                          <div class="post-image">
                            <img src="<?php echo 'upload/'.$row['image_art'] ?>">
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="post-detail">
                            <h4><?php echo $row['titre_art']; ?></h4>
                            <p>
                              <?php echo(substr($row['contenu_art'],0,210).'...'); ?>
                            </p>
                            <a href="actualites_voir.php?id=<?php echo $row['id']; ?>">
                              <div class="post-btn">
                                <button class="btn btn-post float-right">En savoir plus</button>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <?php
                        }
                      }
                      ?>

                   <div class="container">
                    <ul class="pagination">
                      <?php
                    for($i = 0; $i<$nb_page; $i++){
                      $k = $i * $nbliste;
                      $p = $i+1;

                      ?>
                      <li class="page-item"><a class="page-link"  href="actualites.php?debut=<?php echo $k  ?>"><?php echo $p; ?></a></li>

                  <?php } ?>

                     </ul>
                   </div>
            </section>
          </div>
        </div>
  </div>




<!-- FOOTER -->
<footer>
  <div class="container-fluid">
    <div class="row fond_bleu">
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
