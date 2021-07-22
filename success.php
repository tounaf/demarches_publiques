<?php
 require './parameters.php';
require './connexion/connexion.php';
if (isset($_GET['id']) && isset($_GET['fill']) && isset($_GET['ball'])) {
    $id = $_GET['id'];
    $tableName = $_GET['ball'];
    $whereColone = $_GET['fill'];
    $sql = "UPDATE $tableName set is_paid = true where $whereColone = $id";
    $conn->query($sql);
}


require './mail/swift_mailer.php';
require './mail/acte_naissance_message.php';
require './mail/acte_naissance_facture.php';
require './mail/acte_naissance_details.php';

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