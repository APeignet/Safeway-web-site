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

if(isset($_SESSION['email'])) {
    require '../model/model_verif_ancien_mdp.php';
    if(is_array($row)){  
        if(isset($_POST['mdpOG']) AND !empty($_POST['mdpOG']) AND isset($_POST['mdp1']) AND !empty($_POST['mdp1']) AND isset($_POST['mdp2']) AND !empty($_POST['mdp2'])) {
            $mdpOG = $_POST['mdpOG'];
            if(password_verify($mdpOG,$row['mdp'])){
               
                if(preg_match("#[A-Z]#",$_POST['mdp1']) && preg_match("#[a-z]#",$_POST['mdp1']) && preg_match("#[0-9]#",$_POST['mdp1']) && preg_match("#[@[\]^_!\#$%&'()*+,./:;{}<>=|~?-]#",$_POST['mdp1']) && (strlen($_POST['mdp1']) >= 8)){
                    $mdp1 = $_POST['mdp1'];
                    $mdp2 = $_POST['mdp2'];
                    if($mdp1 == $mdp2) {
                        $hash = password_hash($mdp1, PASSWORD_DEFAULT);
                        require '../model/model_modif_mdp.php';
                        $ok_fr = "Votre mot de passe a bien été modifié ! Vous serez redirigé automatiquement vers la page d'authentification dans 3 secondes.";
                        $ok_en = "Password modification successful! You will be automatically redirected to the authentication page in 3 seconds.";
                        session_destroy();
                        header( "refresh:3;url=../controller/controller_authentification_fr.php" );
                    } else {
                        $msg1_fr = "Vos mots de passe ne correspondent pas !";
                        $msg1_en = "Your passwords don't match";
                    }

                } else{
                    $msg2_fr = "Utilisez au moins huit caractères avec des minuscules, des majuscules, des chiffres et des symboles.";
                    $msg2_en = "Use at least eight characters with lowercase and uppercase letters, numbers and symbols.";
                }
            } else {
                $non_fr = "Votre mot de passe actuel est incorrect !";
                $non_en = "Your current password is incorrect !";
            } 

        }

    require '../view/modif_mdp_fr.php';

    }
    
}
?>