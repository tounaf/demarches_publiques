<?php
const DEMANDE_MAIL = "devinbox.contact@gmail.com";
//require("setting_mail.php");
//require_once("swift_mailer.php");
ob_start();
require '../templates/mail_acte_naissance_facture.php';
$voir = ob_get_clean();



echo ("detail destin =>>>>>>>>>>" .DEMANDE_MAIL);
echo "<br>";
echo ("detail EXP =>>>>>>>>>>" .FROM);
echo "<br>";
// Create a message
$message = (new Swift_Message('Confirmation'))
    ->setFrom([FROM => 'Dominican'])
    ->setTo([DEMANDE_MAIL])
    ->setBody($voir, 'text/html')
;

// Send the message
$result = $mailer->send($message);
echo ("detail EXP =>>>>>>>>>>" .FROM);

//try {
////    $mail->Host = "127.0.0.1:1025";
////    $mail->SMTPAuth = false;
////    $mail->Username = "";
////    $mail->Password = '';
////    $mail->SMTPSecure = "ssl";
//
////email setting
//    $mail->isHTML(true);
//    $mail->AddAddress(DEMANDE_MAIL);
//    $mail->Subject = "Nouvelle demande de ticket";
//
//    $mail->Body = $voir;
//    $mail->send();
//} catch (Exception $e) {
////    print_r($e);die;
//}

?>