<?php
ob_start();
require './templates/mail_acte_mariage_voir.php';
$voir = ob_get_clean();
// Create a message
$message = (new Swift_Message('Confirmation'))
    ->setFrom([FROM => 'Dominican'])
    ->setTo([DEMANDE_MAIL])
    ->setBody($voir, 'text/html')
;

// Send the message
$result = $mailer->send($message);

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