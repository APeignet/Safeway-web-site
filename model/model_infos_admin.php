<?php 

function InfosAdmin ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM utilisateur WHERE idUtilisateur = ? ");
	$reqr->execute(array($idUtilisateur));
	$InfosAdmin = $reqr->fetch();
	return $InfosAdmin;
}

?>