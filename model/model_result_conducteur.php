<?php 

function InfosResultat ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM resultat WHERE idUtilisateur = ? ");
	$reqr->execute(array($idUtilisateur));
	$InfosResultat = $reqr->fetch();
	return $InfosResultat;
}

function InfosResultatC ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM resultat WHERE idUtilisateur = ? and idCapteur='1'");
	$reqr->execute(array($idUtilisateur));
	$InfosResultatC = $reqr->fetch();
	return $InfosResultatC;
}
function InfosResultatT ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM resultat WHERE idUtilisateur = ? and idCapteur='2'");
	$reqr->execute(array($idUtilisateur));
	$InfosResultatT = $reqr->fetch();
	return $InfosResultatT;
}
function InfosResultatV ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM resultat WHERE idUtilisateur = ? and idCapteur='3'");
	$reqr->execute(array($idUtilisateur));
	$InfosResultatV = $reqr->fetch();
	return $InfosResultatV;
}
function InfosResultatR ($bdd, $idUtilisateur)
{
	$reqr = $bdd->prepare("SELECT * FROM resultat WHERE idUtilisateur = ? and idCapteur='4'");
	$reqr->execute(array($idUtilisateur));
	$InfosResultatR = $reqr->fetch();
	return $InfosResultatR;
}

?>
