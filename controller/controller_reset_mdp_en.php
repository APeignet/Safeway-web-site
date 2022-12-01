<?php

require '../model/model_connexion.php';

if(isset($_POST['submit'])) {
    if(isset($_POST['email']) AND !empty($_POST['email'])) {
        $email=$_POST['email'];
        require '../model/model_verif_email.php';
        if($user) {
            if(isset($_POST['mdp1']) AND !empty($_POST['mdp1']) AND isset($_POST['mdp2']) AND !empty($_POST['mdp2'])) {
                if(preg_match("#[A-Z]#",$_POST['mdp1']) && preg_match("#[a-z]#",$_POST['mdp1']) && preg_match("#[0-9]#",$_POST['mdp1']) && preg_match("#[@[\]^_!\#$%&'()*+,./:;{}<>=|~?-]#",$_POST['mdp1']) && (strlen($_POST['mdp1']) >= 8)){
                    $mdp1 = $_POST['mdp1'];
                    $mdp2 = $_POST['mdp2'];
                    if($mdp1 == $mdp2) {
                        $hash = password_hash($mdp1, PASSWORD_DEFAULT);
                        require '../model/model_reset_mdp.php';
                        $ok_fr = "Votre mot de passe a bien été modifié ! Veuillez vous ré-authentifier en cliquant sur le bouton ci-dessous :";
                        $ok_en = "Password modification successful! Please click on the Authentication button to re-log in :";
                    } else {
                        $msg1_fr = "Vos mots de passe ne correspondent pas !";
                        $msg1_en = "Your passwords don't match";
                    }
                } else{
                    $msg2_fr = "Utilisez au moins huit caractères avec des minuscules, des majuscules, des chiffres et des symboles.";
                    $msg2_en = "Use at least eight characters with lowercase and uppercase letters, numbers and symbols.";
                }            
            }
        }else {
        $erreur_fr= "Cet email n'existe pas";
        $erreur_en= "This email does not exists";
        } 
    }

}

require '../view/reset_mdp_en.php';