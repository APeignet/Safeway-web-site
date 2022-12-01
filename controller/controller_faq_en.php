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

    if(isset($_SESSION['email'])) {


        switch ($statut) {
            case 'administrateur':
                $statut_en="Administrator";
                require '../view/faq_administrateur_en.php';
            break;
            case 'gestionnaire':
                $statut_en="Manager"; 
                require '../view/faq_gestionnaire_en.php';
            break;
            case 'utilisateur':
                $statut_en="Driver"; 
                require '../view/faq_utilisateur_en.php';
            break;   

        }
    }