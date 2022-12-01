<?php

session_start();
$email = $_SESSION['email'];

require '../model/model_connexion.php';
require '../model/model_req_infos.php';

$prenom=InfosUser($bdd, $email)['prenom'];
$nom=InfosUser($bdd, $email)['nom'];
$entreprise=InfosUser($bdd,$email)['entreprise'];
$statut=InfosUser($bdd,$email)['statut'];
$birthday=InfosUser($bdd,$email)['birthday'];
$mdp=InfosUser($bdd,$email)['mdp'];
$photo=InfosUser($bdd,$email)['photo'];
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert ='';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $firstname = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $issue = $_POST['issue'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'safecare.by.safeway@gmail.com'; //adresse gmail utilisée en tant que serveur SMTP
        $mail->Password = 'Zucchini321!'; // mdp du compte gmail
        $mail->SMTPSecure = 'ssl';
        $mail->Port = '465';

        $mail->SetFrom($email,'Mailer'); // adresse gmail utilisée en tant que serveur SMTP
        $mail->AddAddress('safecare.by.safeway@gmail.com'); // adresse email utilisée pour recevoir les messages, peut être la même que le celle utilisée pour le serveur SMTP

        $mail->IsHTML(true);
        switch($statut){
            case("utilisateur"):
                $role_fr="Conducteur";
            break;
            case("gestionnaire"):
                $role_fr="Gestionnaire";
            break;

        }
        $mail->Subject = 'Page contact (FR) : '.ucwords($role_fr);
        $mot1="Problème";
        $mot2="Prénom";
        $mail->Body = '<h3>'.utf8_decode($mot1).' : '.utf8_decode($issue).'<br>'.utf8_decode($mot2).' : '.utf8_decode($firstname).' <br>Nom: '.utf8_decode($name).' <br>Email: '.$email.' <br>Message: '.utf8_decode($message).'</h3>';

        $mail->send();
        $alert = '<div class="alert-success">
                  <span class="message" >Message envoyé ! Merci de nous avoir contactés.</span>
                  </div>';

    } catch(Exception $e){
        $alert = '<div class="alert-success">
                  <span class="message">Oups ! Une erreur est survenue. Veuillez essayer à nouveau.</span>
                  </div>';

    }

}
switch ($statut) {
    case 'utilisateur':
        $statut_fr="Conducteur";
       require '../view/contact_utilisateur_fr.php';
       break;
    case 'gestionnaire':
        $statut_fr=$statut;
       require '../view/contact_gestionnaire_fr.php';
       break;   
 }
?>
