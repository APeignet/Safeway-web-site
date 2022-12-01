<?php

$insertmdp = $bdd->prepare("UPDATE utilisateur SET mdp = ? WHERE email = ?");
$insertmdp->execute(array($hash,$email));
 

?>