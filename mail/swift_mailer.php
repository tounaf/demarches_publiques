<?php
const HOST = "go-dominican-republic.com";
const PORT = 25;
const SENDER = "no-reply@go-dominican-republic.com";
const FROM = "no-reply@go-dominican-republic.com";
const PASSWORD = "A741852*/";
try {

    require_once './vendor/autoload.php';
} catch (Exception $exception) {
    require_once '../vendor/autoload.php';
}
// Create the Transport
try {

    $transport = (new Swift_SmtpTransport(HOST, PORT))
//    ->setUsername(SENDER)
//    ->setPassword(PASSWORD)
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

} catch (Exception $exception) {
    echo "An error occured";die;
}
