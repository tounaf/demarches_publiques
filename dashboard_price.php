<?php
session_start();
if(isset($_SESSION['user']))
{
require_once 'parameters.php';
include('connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:login.html");     }

$_SESSION['timeout']=time();

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
  <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
  <!-- Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Fonticons -->
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="assets/fonticons/css/font-awesome.min.css">



</head>
<body>

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
<?php
    include 'navbar.php'
?>


  <!-- BODY -->
  <div class="container-fluid">

    <div class="row pt-5">
      <div class="col-md-12 col-lg-12">
        <section id="">
          <div class="container">
            <h2 class="pb-3">Gestion des actes de naissance </h2>
            <table id="table_id" class="display table-striped table table-bordered dt-responsive">
                <thead>
                  <tr>
                    <th style="">Price</th>
                    <th style="">Date création</th>
                    <th style="">Dernière mise à jour</th>
                    <th style="">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM price ORDER BY id ASC";

                    $resultat = mysqli_query($conn, $sql);

                    if($resultat){
                      if(mysqli_num_rows($resultat)>0){
                        while ($row = mysqli_fetch_assoc($resultat)){

                  ?>
                  <tr data-id="<?php echo $row['id']; ?>">
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><?php echo $row['updated_at']; ?></td>
                    <td>
                      <center>
                        <a href="traitement/price_update.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">
                          <i class="fa fa-edit"></i>
                        </a>
                      </center>
                    </td>
                  </tr>
                </tbody>
                <?php
                      }
                    }
                  }
                ?>
            </table>
          </div>
        </section>
      </div>
    </div>

  </div>
  <!-- BODY -->



<!-- SCRIPTS -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/sweetalert2.all.js"></script>
  <script src="assets/js/sweetalert2.all.min.js"></script>

<!-- DATATABLES -->
  <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="assets/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="assets/js/dataTables.responsive.min.js"></script>
  <script type="text/javascript" src="assets/js/responsive.bootstrap4.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#table_id').DataTable();
    } );
  </script>


</body>
</html>
<?php
}
else{
    header("location:login.html");
}

?>
