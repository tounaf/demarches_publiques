<?php
 require './parameters.php';
require './connexion/connexion.php';
if (isset($_GET['id']) && isset($_GET['fill']) && isset($_GET['ball'])) {
    $id = explode("_",$_GET['id'])[0];
    $tableName = $_GET['ball'];
    $whereColone = $_GET['fill'];
    $sql = "UPDATE $tableName set is_paid = true where $whereColone = $id";
    $conn->query($sql);
}


require './mail/swift_mailer.php';
const DEMANDE_MAIL = PARAMS['demandes_mail'];
require './mail/'.$tableName.'_message.php';
require './mail/'.$tableName.'_facture.php';
require './mail/'.$tableName.'_details.php';

?>
<html>
<head>
  <title>Thanks for your order!</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section>
    <p>
      Paiement avec succès , vous allez recevoir des émail de confirmation .

      Pour toute question , merci d'envoyer un email au <a href="mailto:orders@example.com"><?= PARAMS['contact_mail'] ?></a>.
    </p>
  </section>
</body>
</html>