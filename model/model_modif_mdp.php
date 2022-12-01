<?php

$requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
$requser->execute(array($_SESSION['email']));
$user = $requser->fetch();

$insertmdp = $bdd->prepare("UPDATE utilisateur SET mdp = ? WHERE email = ?");
$insertmdp->execute(array($hash,$_SESSION['email']));
 

?>