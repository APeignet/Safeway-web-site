<?php

	session_start();
   $email = $_SESSION['email'];

   require '../model/model_connexion.php';
   require '../model/model_req_infos.php';
   
   $prenom=InfosUser($bdd, $email)['prenom'];
   $nom=InfosUser($bdd, $email)['nom'];
   $entreprise=InfosUser($bdd,$email)['entreprise'];
   $statut=InfosUser($bdd,$email)['statut'];
	$birthday=InfosUser($bdd,$email)['birthday'];
	$mdp=InfosUser($bdd,$email)['mdp'];
   $photo=InfosUser($bdd,$email)['photo'];


if(isset($_SESSION['email'])) {
   if (isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['birthday']) && !empty($_POST['birthday']) && isset($_POST['entreprise']) && !empty($_POST['entreprise'])){
      if (preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['prenom']) && preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['nom']) && preg_match("#^[A-Z]+[A-Za-zàâäéèêëïîôöùûüÿç'\s-]*$#", $_POST['entreprise'])){  
          if (preg_match("#^[0-9]{4}\-[0-9]{2}\-[0-9]{2}$#", $_POST['birthday'])){ 
                     
                     $file=$_FILES['file'];                            
                     $fileName = $_FILES['file']['name'];
                     $fileTmpName = $_FILES['file']['tmp_name'];
                     $fileSize = $_FILES['file']['size'];
                     $fileError = $_FILES['file']['error'];
                     $fileType = $_FILES['file']['type'];
             
                     $fileExt = explode('.', $fileName);
                     $fileActualExt = strtolower(end(($fileExt)));
             
                     $allowed = array('jpg','jpeg','png');
                     if (in_array($fileActualExt, $allowed)){
                         if ($fileError ===0){
                             if($fileSize < 1000000){
                                 $fileNameNew = uniqid('', true).".".$fileActualExt;
                                 $fileDestination = "../view/public/images/".$fileNameNew;
                                 move_uploaded_file($fileTmpName, $fileDestination);
                             }
                           }
                        }
                     require '../model/model_edition_profil.php';
                     header("Location: ../controller/controller_edition_profil_fr.php");
                  }
            }    
   }                     
   switch ($statut) {
      case 'utilisateur':
         $statut_fr="Conducteur";
         require '../view/profil_edition_utilisateur_fr.php';
         break;
      case 'administrateur':
         $statut_fr=$statut;
         require '../view/profil_edition_administrateur_fr.php';
         break;
      case 'gestionnaire':
         $statut_fr=$statut;
         require '../view/profil_edition_gestionnaire_fr.php';
         break;   
   
   }
}
