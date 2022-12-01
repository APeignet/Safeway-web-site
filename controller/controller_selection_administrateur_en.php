<?php

// Démarrage de la session
session_start();
$email = $_SESSION['email'];
$idUtilisateur = $_GET['id'];

require '../model/model_connexion.php'; // Connexion à la BDD
require '../model/model_req_infos.php'; // Fonction pour récupérer les données de l'utilisateur
require '../model/model_infos_admin.php';


$prenom=InfosUser($bdd, $email)['prenom'];
$nom=InfosUser($bdd, $email)['nom'];
$entreprise=InfosUser($bdd,$email)['entreprise'];
$statut=InfosUser($bdd,$email)['statut'];
$birthday=InfosUser($bdd,$email)['birthday'];
$mdp=InfosUser($bdd,$email)['mdp'];
$photo = InfosUser($bdd,$email)['photo'];

$prenomG=InfosAdmin($bdd, $idUtilisateur)['prenom'];
$nomG=InfosAdmin($bdd, $idUtilisateur)['nom'];
$entrepriseG=InfosAdmin($bdd,$idUtilisateur)['entreprise'];
$statutG=InfosAdmin($bdd,$idUtilisateur)['statut'];
$birthdayG=InfosAdmin($bdd,$idUtilisateur)['birthday'];
$mdpG=InfosAdmin($bdd,$idUtilisateur)['mdp'];
$emailG=InfosAdmin($bdd, $idUtilisateur)['email'];
$photoG=InfosAdmin($bdd,$idUtilisateur)['photo'];
$idUtilisateurG=InfosAdmin($bdd,$idUtilisateur)['idUtilisateur'];
$photoG= InfosAdmin($bdd,$idUtilisateur)['photo'];

// Si la session est ouverte (donc si vous vous êtes authentifié(e)s)
if(isset($_SESSION['email'])) {

   /*Complétez avec le php de votre page et les différents require pour appeler la BDD*/


// Appelle la page HTML en fonction du statut de l'utilisateur
$statut_en="Manager";
$statut_fr=$statut;
require '../view/selection_administrateur_en.php';
}