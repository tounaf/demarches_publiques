<?php
  include('connexion.php');
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
  <a href="">Acte de naissance</a>
  <a href="">Extrait casier judiciaire</a>
  <a href="">Acte de décès</a>
  <a href="">Acte de mariage</a>
  <a href="actualites.php" class="active">Actualités</a>
  <a href="">Contact</a>
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
              <h2 class="title"><b>Historique</b></h2>
              <div class="actu-filter">
                <!-- <p class="">
                  Vous décrouvrez ici toutes les informations nous concernant. Nous partageons des conseils et astuces pour vous accompagner dans vos projets.
                </p> --><!--
                <h2 class="title"><b>Historique</b></h2> -->

                <div class="check-filter">
                        <ul>

                <?php

                  $sql = "SELECT * FROM article ORDER BY id_art ASC";
                  $result = mysqli_query($conn, $sql);

                  if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                 ?>


                          <li class="liste_article"><a href="article.php?id=<?php echo $row['id_art'] ?>"><?php echo $row['titre_art']; ?></a></li>
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
                      //$nbliste = $_GET["liste"];
                      $nbliste = 3;
                    }
                    else
                    {
                      $commencement = 0;
                      $nbliste = 3;
                    }

                    $nb_page = ceil($total_ligne/$nbliste);
                    $sql = "SELECT * FROM article ORDER BY id_art DESC LIMIT  $commencement, $nbliste";



                    //$sql = "SELECT * FROM article ORDER BY id_art DESC LIMIT 3";
                    $result = mysqli_query($conn, $sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                  ?>
                    <div class="post-content">
                      <div class="row">
                        <div class="col-md-4 col-sm-12">
                          <div class="post-image">
                            <img src="<?php echo $row['image_art'] ?>">
                          </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                          <div class="post-detail">
                            <h2><?php echo $row['titre_art']; ?></h2>
                            <p>
                              <?php echo(substr($row['contenu_art'],0,210).'...'); ?>
                            </p>
                            <a href="article.php?id=<?php echo $row['id_art']; ?>">
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
                      <li class="page-item"><a class="page-link"  href="actualite.php?debut=<?php echo $k  ?>"><?php echo $p; ?></a></li>

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
