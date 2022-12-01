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
    $photo=InfosUser($bdd, $email)['photo'];
    


    
    // $List = PilotsList($bdd);
    require '../model/model_verif_connexion.php';
    
    
    switch ($statut) {
        case 'utilisateur':
            $statut_fr="Conducteur";
            require '../view/accueil_utilisateur_fr.php';
            break;
        case 'administrateur':
            $statut_fr=$statut;
            require '../view/accueil_administrateur_fr.php';
            break;
        case 'gestionnaire':
            $statut_fr=$statut;
            require '../view/accueil_gestionnaire_fr.php';
            break;
    }
    
}


