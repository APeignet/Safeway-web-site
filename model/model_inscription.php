<?php 

    function inscription($bdd, $typeUtilisateur, $fileNameNew) {
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $requete = $bdd->prepare('INSERT INTO utilisateur(prenom,nom,birthday, entreprise, email, mdp, statut, photo) VALUES (?,?,?,?,?,?,?,?)' );
        $requete->execute(array($_POST['prenom'],$_POST['nom'],$_POST['birthday'],$_POST['entreprise'],$_POST['email'],$mdp,$typeUtilisateur, $fileNameNew));
    }