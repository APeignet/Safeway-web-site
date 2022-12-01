<?php 

    session_start();
    $email = $_SESSION['email'];

    require '../model/model_connexion.php'; 
    require '../model/model_req_infos.php';
    require '../model/model_cgu_edition.php';

    $prenom=InfosUser($bdd, $email)['prenom'];
    $nom=InfosUser($bdd, $email)['nom'];
    $entreprise=InfosUser($bdd,$email)['entreprise'];
    $statut=InfosUser($bdd,$email)['statut'];
    $birthday=InfosUser($bdd,$email)['birthday'];
    $mdp=InfosUser($bdd,$email)['mdp'];
    $idUtilisateur=InfosUser($bdd,$email)['idUtilisateur'];
    $photo=InfosUser($bdd,$email)['photo'];

    if(isset($_SESSION['email'])) {
    
       if (isset($_POST['numero_ajout']) && !empty($_POST['numero_ajout']) && isset($_POST['detail_ajout']) && !empty($_POST['detail_ajout']) ){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_ajout']) && preg_match("#^[A-Z]#", $_POST['detail_ajout']) && preg_match("#\.$#", $_POST['detail_ajout']) && preg_match("#^[A-Z]#",$_POST['detail_ajout'])){ 
                ajouter_cgu($idUtilisateur);

            }          
        }
        
        if (isset($_POST['numero_ajout2']) && !empty($_POST['numero_ajout2']) && isset($_POST['detail_ajout2']) && !empty($_POST['detail_ajout2']) ){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_ajout2']) && preg_match("#^[A-Z]#", $_POST['detail_ajout2']) && preg_match("#\.$#", $_POST['detail_ajout2']) && preg_match("#^[A-Z]#",$_POST['detail_ajout2'])){ 
        
                ajouter_cgu2($idUtilisateur);

            }         
        }
        

       if (isset($_POST['numero_edition']) && !empty($_POST['numero_edition']) && isset($_POST['numero_editionbis']) && !empty($_POST['numero_editionbis']) && isset($_POST['detail_edition']) && !empty($_POST['detail_edition']) ){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_edition']) && preg_match("#^[0-9]{1,}$#", $_POST['numero_editionbis']) && preg_match("#^[A-Z]#", $_POST['detail_edition']) && preg_match("#\.$#", $_POST['detail_edition'])){ 
              
                modifier_cgu($idUtilisateur);
            }            
        }

        if (isset($_POST['numero_edition2']) && !empty($_POST['numero_edition2']) && isset($_POST['numero_editionbis2']) && !empty($_POST['numero_editionbis2']) && isset($_POST['detail_edition2']) && !empty($_POST['detail_edition2'])){
            if (preg_match("#^[0-9]{1,}$#", $_POST['numero_edition2']) && preg_match("#^[0-9]{1,}$#", $_POST['numero_editionbis2']) && preg_match("#^[A-Z]#", $_POST['detail_edition2']) && preg_match("#\.$#", $_POST['detail_edition2'])){ 
              
                modifier_cgu2($idUtilisateur);
            }            
        }
        
        if($statut = "administrateur"){
            $statut_fr = $statut;
            require '../view/cgu_edition_fr.php';
        }
    }
