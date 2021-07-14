<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


<?php
    require_once '../parameters.php';
	if (!empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST["message"])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$objet = "go-dominican-republic.com - Contact Form";

//	include("setting_mail.php");

        require_once '../vendor/autoload.php';
// Create the Transport
        try {

            $transport = (new Swift_SmtpTransport(PARAMS['mailer_host'], PARAMS['mailer_port']))
//    ->setUsername('no-reply@go-dominican-republic.com')
//    ->setPassword('A741852*/')
            ;

// Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);

// Create a message
            $message = (new Swift_Message(("$email ($objet)")))
                ->setFrom(['no-reply@demarches-publiques.com' => 'John Doe'])
                ->setTo([PARAMS['contact_mail']])
                ->setBody("<b>Nom : </b>".$nom."<br>"."<b>Prénom : </b>".$prenom."<br>". "<b>Contact : </b>".$contact."<br>". "<b>Email :</b> ".$email."<br>"."<b>Objet :</b> ".$objet."<br>"."<br><b>Message :</b> ".$message, 'text/html')
            ;

// Send the message
            try {

                $result = $mailer->send($message);
                echo "<script type='text/javascript'>
                   Swal.fire(
                  'Message envoyé!',
                  'Veuillez cliquer sur le boutton ci-dessous !',
                  'success'
                );
                var btnSwalls = document.getElementsByClassName('swal2-confirm');
                        for(var i = 0; i<btnSwalls.length; i++)
                        {
                          btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = 'contact.php';
                            })
                        }
                </script>";
            } catch (Swift_TransportException $exception) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...Une erreur s\'est produite',
                      text: 'Veuillez actualiser la page et ressaisir les informations!'
                    });
                    var btnSwalls = document.getElementsByClassName('swal2-confirm');
                    for(var i = 0; i<btnSwalls.length; i++)
                    {
                        btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = 'contact.php';
                            })
                    }
                </script>";
            }

        } catch (Exception $exception) {
            var_dump($exception);die;
        }


	}
 ?>
 </body>
</html>
