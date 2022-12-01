<?php

// Démarrage de la session
session_start();
$email = $_SESSION['email'];


require '../model/model_connexion.php'; // Connexion à la BDD
require '../model/model_req_infos.php'; // Fonction pour récupérer les données de l'utilisateur
require '../model/model_infos_gest.php';
require '../model/model_result_conducteur.php';




$prenom=InfosUser($bdd, $email)['prenom'];
$nom=InfosUser($bdd, $email)['nom'];
$entreprise=InfosUser($bdd,$email)['entreprise'];
$statut=InfosUser($bdd,$email)['statut'];
$birthday=InfosUser($bdd,$email)['birthday'];
$mdp=InfosUser($bdd,$email)['mdp'];
$photo = InfosUser($bdd,$email)['photo'];
$idUtilisateur = InfosUser($bdd,$email)['idUtilisateur'];

$prenomD=InfosDriver($bdd, $idUtilisateur)['prenom'];
$nomD=InfosDriver($bdd, $idUtilisateur)['nom'];
$entrepriseD=InfosDriver($bdd,$idUtilisateur)['entreprise'];
$statutD=InfosDriver($bdd,$idUtilisateur)['statut'];
$birthdayD=InfosDriver($bdd,$idUtilisateur)['birthday'];
$mdpD=InfosDriver($bdd,$idUtilisateur)['mdp'];
$photoD=InfosDriver($bdd,$idUtilisateur)['photo'];
$idUtilisateurD=InfosDriver($bdd,$idUtilisateur)['idUtilisateur'];

$dateResult= InfosResultat($bdd, $idUtilisateur)['dateResult'];
$valeurC= InfosResultatC($bdd, $idUtilisateur)['valeur'];
$valeurT= InfosResultatT($bdd, $idUtilisateur)['valeur'];
$valeurV= InfosResultatV($bdd, $idUtilisateur)['valeur'];
$valeurR= InfosResultatR($bdd, $idUtilisateur)['valeur'];

$Score = 0;
if ($valeurC > 70){
  $Score +=1;
}
if ($valeurT > 26){
  $Score +=1;
}
if ($valeurV > 12){
  $Score +=1;
}
if ($valeurR > 125){
  $Score +=1;
}





// Si la session est ouverte (donc si vous vous êtes authentifié(e)s)
if(isset($_SESSION['email'])) {

   /*Complétez avec le php de votre page et les différents require pour appeler la BDD*/

     $dates = $bdd->query("SELECT DISTINCT dateResult FROM resultat WHERE idUtilisateur=$idUtilisateur ");
     $notes = $bdd ->query("SELECT avg(valeur) FROM resultat");
     $resultsC = $bdd->query("SELECT * FROM resultat WHERE  idCapteur= '1' AND idUtilisateur=$idUtilisateur ");
     $resultsT = $bdd->query("SELECT * FROM resultat WHERE  idCapteur= '2' AND idUtilisateur=$idUtilisateur");
     $resultsV = $bdd->query("SELECT * FROM resultat WHERE  idCapteur= '3' AND idUtilisateur=$idUtilisateur");
     $resultsR = $bdd->query(("SELECT * FROM resultat WHERE  idCapteur= '4' AND idUtilisateur=$idUtilisateur"));

     $notes = $bdd->query("SELECT  COUNT(*) as number FROM resultat
     INNER JOIN capteur ON capteur.idCapteur = resultat.idCapteur
     WHERE valeur > capteur.ValeurMin AND idUtilisateur=$idUtilisateur
     GROUP BY dateResult");

// Appelle la page HTML en fonction du statut de l'utilisateur


    $statut_en="Driver"; //que si controller anglais
    $statut_fr='Conducteur';
    require '../view/gestion_utilisateur_en.php';

}
