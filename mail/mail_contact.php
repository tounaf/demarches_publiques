<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


<?php

	if (!empty($_POST['nom']) && !empty($_POST['prenom'])&& !empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST["message"])) {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$objet = "go-dominican-republic.com - Contact Form";

	include("setting_mail.php");

try {

    //Server settings
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "fenitrar07@gmail.com";
	$mail->Password = 'fenitraAppleID1321@@@';
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email, $nom);
	$mail->AddAddress("contact@go-dominican-republic.com");
	$mail->Subject = ("$email ($objet)");
	$mail->Body = "<b>Nom : </b>".$nom."<br>"."<b>Prénom : </b>".$prenom."<br>". "<b>Contact : </b>".$contact."<br>". "<b>Email :</b> ".$email."<br>"."<b>Objet :</b> ".$objet."<br>"."<br><b>Message :</b> ".$message;


	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	if ($mail->send()) {
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
	}else{
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

	}
 ?>
 </body>
</html>
