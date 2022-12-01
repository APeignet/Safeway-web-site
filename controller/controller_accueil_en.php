<?php

// Démarrage de la session
session_start();
$email = $_SESSION['email'];

require '../model/model_connexion.php'; // Connexion à la BDD
require '../model/model_req_infos.php'; // Fonction pour récupérer les données de l'utilisateur

/*
Toutes les variables ne sont pas utilisées, remplacer les 'JF ALBERTINI'
par des <?php echo $variable ?> -> regardez mes pages view et copiez
exactement ce que je vous ai envoyé en screen sur messenger
Attention à mettre $statut_en pour les pages en anglais et pas $statut
*/

$prenom=InfosUser($bdd, $email)['prenom'];
$nom=InfosUser($bdd, $email)['nom'];
$entreprise=InfosUser($bdd,$email)['entreprise'];
$statut=InfosUser($bdd,$email)['statut'];
$birthday=InfosUser($bdd,$email)['birthday'];
$mdp=InfosUser($bdd,$email)['mdp'];
$photo = InfosUser($bdd,$email)['photo'];

// Si la session est ouverte (donc si vous vous êtes authentifié(e)s
if (isset($_SESSION['email'])) {

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
