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
            mb_internal_encoding('UTF-8');
            $sujet = 'Réinitialisation du mot de passe';
            $mail->Subject = mb_encode_mimeheader($sujet);
            $mot="réinitialiser";
            $mail->Body = 'Pour '.utf8_decode($mot).' votre mot de passe cliquez <a href="safecare/Safeway-for-Infinite-Measures-main/controller/controller_reset_mdp_fr" style="color:blue">Ici</a>';

            $mail->send();
            $alert1 = 'Mail envoyé ! Veuillez vérifier votre messagerie.<br/> Vous serez automatiqumement redirigé vers la page authentification dans 5 secondes.';
            header( "refresh:5;url=../controller/controller_authentification_fr.php" );

            } catch(Exception $e){
                echo $e->errorMessage();
                $alert2 = 'Oups ! Une erreur est survenue. Veuillez essayer à nouveau.';
            } catch(\Exception $e){
                echo $e->getMessage();
            }

        } else {
            $non = "Email introuvable";
        }      
    }
}

require '../view/mdp_fr.php';
    
