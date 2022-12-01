<?php

require '../model/model_connexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
if(isset($_POST['email']) AND !empty($_POST['email'])){
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        require '../model/model_verif_email.php';
        if ($user) {
            try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'safecare.by.safeway@gmail.com'; //adresse gmail utilisée en tant que serveur SMTP
            $mail->Password = 'Zucchini321!'; // mdp du compte gmail
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('safecare.by.safeway@gmail.com'); // adresse gmail utilisée en tant que serveur SMTP
            $mail->addAddress((string)$email); // adresse email utilisée pour recevoir les messages, peut être la même que le celle utilisée pour le serveur SMTP

            $mail->IsHTML(true);
            $mail->Subject = 'Reset your password';
            $mail->Body = 'To reset your password, click <a href="safecare/Safeway-for-Infinite-Measures-main/controller/controller_reset_mdp_en" style="color:blue">Here</a>';

            $mail->send();
            $alert1 = 'Email sent ! Please check your inbox.<br/> You will be automatically redirected to the authentication page in 5 seconds.';
            header( "refresh:5;url=../controller/controller_authentification_en.php" );
            } catch(Exception $e){
                echo $e->errorMessage();
                $alert2 = 'Sorry ! An error occured. Please try again.';
            } catch(\Exception $e){
                echo $e->getMessage();
            }

        } else {
            $non = "Email cannot be found";
        }      
    }
}

require '../view/mdp_en.php';