<?php 

//fonction qui récupère les infos de l'utilisateur connecté
function InfosUser ($bdd, $email)
{
	$req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? ");
	$req->execute(array($email));
	$InfosUser = $req->fetch();
	return $InfosUser;
}
/*
function PhotoUser ($bdd, $email) {
	$req = $bdd->prepare("SELECT idPhoto FROM utilisateur WHERE email = ? ");
	$req->
}

*/
/*
function emailFromName ($bdd, $nom, $prenom)
{
	$req = $bdd->prepare("SELECT email FROM utilisateur WHERE nom = ? AND prenom = ?");
	$req->execute(array($nom, $prenom));
	return $req->fetchAll();
}

//fonction qui récupère la société à partir du email de l'utilisateur

function NomCompagnie ($bdd, $email)
{
    $req = $bdd->prepare("SELECT entreprise.nom_entreprise FROM entreprise, utilisateur WHERE utilisateur.société_id_entreprise
= entreprise.id_entreprise AND utilisateur.email = ? ");
    $req->execute(array($email));
    $NomCompagnie = $req->fetch();
    return $NomCompagnie;
}

//--------------------------------------------------------//

//fonction qui récupère les nom et prenom de tous les utilisateurs
function GlobalList ($bdd) 
{
	$req = $bdd->prepare("SELECT nom, prenom FROM utilisateur");
	$req->execute();
	return $req->fetchAll();
}

function AllUsers($bdd)
{
	$req = $bdd->prepare("SELECT nom, prenom, ville, pays, type, nom_entreprise, nSS FROM utilisateur 
		JOIN type_utilisateur ON type_utilisateur.id_type = utilisateur.type_utilisateur_id_type
		JOIN entreprise ON entreprise.id_entreprise = utilisateur.société_id_entreprise");
	$req->execute();
	return $req->fetchAll();
}

//fonction qui récupère les données de tous les utilisateurs
function SearchUser($bdd, $recherche)
{
	$req = $bdd->prepare("SELECT nom, prenom, ville, pays, type, nom_entreprise, nSS FROM utilisateur 
		JOIN type_utilisateur ON type_utilisateur.id_type = utilisateur.type_utilisateur_id_type
		JOIN entreprise ON entreprise.id_entreprise = utilisateur.société_id_entreprise	
		WHERE nom LIKE ?");
	$req->execute(array($recherche));
	return $req->fetchAll();
}



//fonction qui récupère la liste de toutes les sociétés
function Listeentreprise ($bdd)
{
	$req = $bdd->prepare("SELECT DISTINCT nom_entreprise FROM entreprise");
	$req->execute();
	return $req->fetchAll();
}


//--------------------------------------------------------//

//fonction qui récupère le nom des utilisateurs de type pilotes
function PilotsList ($bdd)
{
	$req = $bdd->prepare("SELECT nom, prenom FROM utilisateur WHERE type_utilisateur_id_type LIKE 'p' ");
	$req->execute();
	return $req->fetchAll();
}

//fonction qui récupère les données de la table test pour tous les pilotes
function AllResultsPilots ($bdd)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS");
	$req_result->execute();
	return $req_result->fetchAll();
}

//fonction qui récupère les données de la table test pour un utilisateur donné
function SearchResultsOnePilot ($bdd, $recherche)
{
	$req_result = $bdd->prepare("SELECT nom, date_test, test_id_type, resultat FROM test 
		JOIN utilisateur 
		ON test.Utilisateur_nSS = utilisateur.nSS WHERE nom = ?");
	$req_result->execute(array($recherche));
	return $req_result->fetchAll();
}

*/