<?php

// Démarrage de la session
session_start();
$email = $_SESSION['email'];
error_reporting(0);
$idUtilisateurSup = $_GET['id'];

require '../model/model_connexion.php'; // Connexion à la BDD
require '../model/model_req_infos.php'; // Fonction pour récupérer les données de l'utilisateur



$prenom=InfosUser($bdd, $email)['prenom'];
$nom=InfosUser($bdd, $email)['nom'];
$entreprise=InfosUser($bdd,$email)['entreprise'];
$statut=InfosUser($bdd,$email)['statut'];
$birthday=InfosUser($bdd,$email)['birthday'];
$mdp=InfosUser($bdd,$email)['mdp'];
$photo=InfosUser($bdd,$email)['photo'];

// Si la session est ouverte (donc si vous vous êtes authentifié(e)s)
if(isset($_SESSION['email'])) {
  



// Appelle la page HTML en fonction du statut de l'utilisateur
$users = $bdd->query("SELECT * FROM utilisateur WHERE statut= 'utilisateur' ");
$delete = $bdd->exec("DELETE  FROM utilisateur WHERE idUtilisateur = $idUtilisateurSup");
   
  $statut_fr=$statut;
  require '../view/conducteur_gestionnaire_fr.php';


}