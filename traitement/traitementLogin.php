<?php

session_start();
if(isset($_SESSION['user']))
{
    session_destroy();
}

	include('../connexion/connexion.php');

    if (!empty($_POST["login"]) && !empty($_POST["mdp"])) {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        $sqlLogin = "SELECT * FROM user WHERE login = '$login' and mdp = '$mdp'";
        $result = $conn->query($sqlLogin);
        $Passager = $result->fetch()['0'];

        if ($Passager) {
            $_SESSION['user'] = 'admin';
        	header('location:../dashboard.php');
        } else {
        	header('location: ../login.php');
        }
    }

    mysqli_close($conn);
?>
