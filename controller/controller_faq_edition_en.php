<?php 

    session_start();
    $email = $_SESSION['email'];

    require '../model/model_connexion.php'; 
    require '../model/model_req_infos.php'; 
    require '../model/model_faq_edition.php';

    $prenom=InfosUser($bdd, $email)['prenom'];
    $nom=InfosUser($bdd, $email)['nom'];
    $entreprise=InfosUser($bdd,$email)['entreprise'];
    $statut=InfosUser($bdd,$email)['statut'];
    $birthday=InfosUser($bdd,$email)['birthday'];
    $mdp=InfosUser($bdd,$email)['mdp'];    
    $idUtilisateur=InfosUser($bdd,$email)['idUtilisateur'];
    $photo=InfosUser($bdd,$email)['photo'];

    if(isset($_SESSION['email'])) {
    
       if (isset($_POST['numero_ajout']) && !empty($_POST['numero_ajout']) && isset($_POST['question_ajout']) && !empty($_POST['question_ajout']) && isset($_POST['reponse_ajout']) && !empty($_POST['reponse_ajout'])){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_ajout']) && preg_match("#^[A-Z]#", $_POST['question_ajout']) && preg_match("#\s\?$#", $_POST['question_ajout']) && preg_match("#^[A-Z]#", $_POST['reponse_ajout']) && preg_match("#\.$#", $_POST['reponse_ajout'])){ 
                
                ajouter_faq($idUtilisateur);

            }            
        }      
        
        if (isset($_POST['numero_ajout2']) && !empty($_POST['numero_ajout2']) && isset($_POST['question_ajout2']) && !empty($_POST['question_ajout2']) && isset($_POST['reponse_ajout2']) && !empty($_POST['reponse_ajout2'])){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_ajout2']) && preg_match("#^[A-Z]#", $_POST['question_ajout2']) && preg_match("#\s\?$#", $_POST['question_ajout2']) && preg_match("#^[A-Z]#", $_POST['reponse_ajout2']) && preg_match("#\.$#", $_POST['reponse_ajout2'])){ 
        
                ajouter_faq2($idUtilisateur);

            }            
        }
        

        if (isset($_POST['numero_edition']) && !empty($_POST['numero_edition']) && isset($_POST['numero_editionbis']) && !empty($_POST['numero_editionbis']) && isset($_POST['question_edition']) && !empty($_POST['question_edition']) && isset($_POST['reponse_edition']) && !empty($_POST['reponse_edition'])){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_edition']) && preg_match("#^[0-9]{1,}$#", $_POST['numero_editionbis']) && preg_match("#^[A-Z]#", $_POST['question_edition']) && preg_match("#\s\?$#", $_POST['question_edition']) && preg_match("#^[A-Z]#", $_POST['reponse_edition']) && preg_match("#\.$#", $_POST['reponse_edition']) ){ 
                require '../model/model_faq_edition.php';
                modifier_faq($idUtilisateur);
            }            
        }

        if (isset($_POST['numero_edition2']) && !empty($_POST['numero_edition2']) && isset($_POST['numero_editionbis2']) && !empty($_POST['numero_editionbis2']) && isset($_POST['question_edition2']) && !empty($_POST['question_edition2']) && isset($_POST['reponse_edition2']) && !empty($_POST['reponse_edition2'])){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_edition2']) && preg_match("#^[0-9]{1,}$#", $_POST['numero_editionbis2']) && preg_match("#^[A-Z]#", $_POST['question_edition2']) && preg_match("#\s\?$#", $_POST['question_edition2']) && preg_match("#^[A-Z]#", $_POST['reponse_edition2']) && preg_match("#\.$#", $_POST['reponse_edition2']) ){ 
              
                modifier_faq2($idUtilisateur);
            }            
        }

        if($statut = "administrateur"){
            $statut_en = "Administrator";
            require '../view/faq_edition_en.php';
        }
    
    }


