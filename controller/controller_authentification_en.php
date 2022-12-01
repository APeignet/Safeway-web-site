<?php

session_start();

require '../model/model_connexion.php';

//si l'utilisateur envoie le formulaire
if(isset($_POST['email']) && isset($_POST['mdp']))
{
    $email = $_POST['email']; 
    $mdp = $_POST['mdp'];
    
    if($email !== "" && $mdp !== "")
    {
        require '../model/model_verif_connexion.php';

        if (BonId($bdd, $email, $mdp)) {

            require '../model/model_req_infos.php';

            //on crée une session pour l'utilisateur qui se connecte
            $_SESSION['email']=$email;

            header('Location: ../controller/controller_redir_accueil_en.php');

        }

        else 
        {
            $erreur=1;
                require '../view/authentification_en.php'; // utilisateur ou mot de passe incorrect
        }
    }

    else
    {
        $erreur=2;
        require '../view/authentification_en.php'; // utilisateur ou mot de passe vide
    }
}

//si l'utilisateur arrive sur la page de connexion 
else
{
    $erreur=0;
    require '../view/authentification_en.php';
}

