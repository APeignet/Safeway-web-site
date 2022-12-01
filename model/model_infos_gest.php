<?php 

function InfosDriver ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM utilisateur WHERE idUtilisateur = ? ");
	$reqr->execute(array($idUtilisateur));
	$InfosDriver = $reqr->fetch();
	return $InfosDriver;
}

?>