<?php 
session_start();

if (!(isset($_SESSION['email']))) {
    require '../view/authentification_fr.php';
}

else {
    $email = $_SESSION['email'];

    require '../model/model_connexion.php';
    require '../model/model_req_infos.php';

    $prenom=InfosUser($bdd, $email)['prenom'];
    $nom=InfosUser($bdd, $email)['nom'];
    $entreprise=InfosUser($bdd,$email)['entreprise'];
    $statut=InfosUser($bdd,$email)['statut'];
    $photo=InfosUser($bdd,$email)['photo'];
    // $List = PilotsList($bdd);
    require '../model/model_verif_connexion.php';
    
    
    switch ($statut) {
        case 'utilisateur':
            $statut_en="Driver";
            require '../view/accueil_utilisateur_en.php';
            break;
        case 'administrateur':
            $statut_en="Administrator";
            require '../view/accueil_administrateur_en.php';
            break;
        case 'gestionnaire':
            $statut_en="Manager";
            require '../view/accueil_gestionnaire_en.php';
            break;
    }
    
}


