<?php

   /*Complétez avec le php de votre page et les différents require pour appeler la BDD*/

   require '../controller/controller_conducteur_gestionnaire_fr.php';

   if(isset($_POST['bouton'])) {
       $id_c=$_POST['bouton'];
       require '../model/model_selection.php';
       $prenom=Infos_conducteurs($bdd, $id_c)['prenom'];
       $nom=InfosUser($bdd, $id_c)['nom'];
       $entreprise=InfosUser($bdd,$id_c)['entreprise'];
       $statut=InfosUser($bdd,$id_c)['statut'];
       $birthday=InfosUser($bdd,$id_c)['birthday'];
       header('Location :../controller/test_affichage_infos.php');

   }else{
       echo "ça ne marche pas";
   }
