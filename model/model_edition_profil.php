<?php

   $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ?");
   $requser->execute(array($_SESSION['email']));
   $user = $requser->fetch();

   if(isset($_POST['nom']) AND !empty($_POST['nom']) AND $_POST['nom'] != $user['nom']) {
      $nom = htmlspecialchars($_POST['nom']);
      $insertnom = $bdd->prepare("UPDATE utilisateur SET nom = ? WHERE email = ?");
      $insertnom->execute(array($nom, $_SESSION['email']));
     
   }
   if(isset($_POST['prenom']) AND !empty($_POST['prenom']) AND $_POST['prenom'] != $user['prenom']) {
    $prenom= htmlspecialchars($_POST['prenom']);
    $insertprenom = $bdd->prepare("UPDATE utilisateur SET prenom = ? WHERE email = ?");
    $insertprenom->execute(array($prenom, $_SESSION['email']));
   }
   
   if(isset($_POST['birthday']) AND !empty($_POST['birthday']) AND $_POST['birthday'] != $user['birthday']) {
      $birthday= htmlspecialchars($_POST['birthday']);
      $insertbirthday = $bdd->prepare("UPDATE utilisateur SET birthday = ? WHERE email = ?");
      $insertbirthday->execute(array($birthday, $_SESSION['email']));
     }

   if(isset($_POST['lienphoto']) AND !empty($_POST['lienphoto']) AND $_POST['lienphoto'] != $user['photo']) {
      $insertphoto = $bdd->prepare("UPDATE utilisateur SET photo = ? WHERE email = ?");
      $insertphoto->execute(array($fileNameNew, $_SESSION['email']));
   }
  


 