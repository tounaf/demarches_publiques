<?php

require_once './vendor/autoload.php';
// Create the Transport
try {

    $transport = (new Swift_SmtpTransport('mail.demarches-publiques.com', 25))
//    ->setUsername('no-reply@go-dominican-republic.com')
//    ->setPassword('A741852*/')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['no-reply@demarches-publiques.com' => 'John Doe'])
        ->setTo(['harinjatovo.fetra@gmail.com', 'tounafyoung@gmail.com' => 'Fetra'])
        ->setBody('Test envoi mail')
    ;

// Send the message
    try {

        $result = $mailer->send($message);
    } catch (Swift_TransportException $exception) {
        var_dump($exception->getMessage());die;
    }

} catch (Exception $exception) {
    var_dump($exception);
}
