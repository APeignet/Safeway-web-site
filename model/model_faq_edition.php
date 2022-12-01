<?php 

    function ajouter_faq($idUtilisateur) {

        
        $question_ajout = $_POST['question_ajout'];
        $reponse_ajout = $_POST['reponse_ajout'];
        $numero_ajout = $_POST['numero_ajout'];        
        
        require '../model/model_connexion.php';

        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM faq WHERE (numero = ?) ');
        $requete->execute(array($numero_ajout));
        $donnees = $requete->fetch();
        $requete1 = $bdd->query('SELECT COUNT(numero) as nombre_question FROM faq');
        $donnees1 = $requete1->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete2 = $bdd->prepare('UPDATE faq SET numero=? WHERE numero=?');
            for ($i=$donnees1['nombre_question'];$i >=$numero_ajout; $i--){
                $requete2->execute(array($i+1,$i));
            }
        }
        $requete3 = $bdd->prepare('INSERT INTO faq(question,reponse,numero,idUtilisateur) VALUES (?,?,?,?)' );
        $requete3->execute(array($question_ajout,$reponse_ajout,$numero_ajout,$idUtilisateur));
    
    }

    function ajouter_faq2($idUtilisateur) {

        
        $question_ajout = $_POST['question_ajout2'];
        $reponse_ajout = $_POST['reponse_ajout2'];
        $numero_ajout = $_POST['numero_ajout2'];
        

        require '../model/model_connexion.php';

        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM faq WHERE (numero = ?) ');
        $requete->execute(array($numero_ajout));
        $donnees = $requete->fetch();
        $requete1 = $bdd->query('SELECT COUNT(numero) as nombre_question FROM faq');
        $donnees1 = $requete1->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete2 = $bdd->prepare('UPDATE faq SET numero=? WHERE numero=?');
            for ($i=$donnees1['nombre_question'];$i >=$numero_ajout; $i--){
                $requete2->execute(array($i+1,$i));
            }
        }
        $requete3 = $bdd->prepare('INSERT INTO faq(question,reponse,numero,idUtilisateur) VALUES (?,?,?,?)' );
        $requete3->execute(array($question_ajout,$reponse_ajout,$numero_ajout,$idUtilisateur));
    
    }

    function modifier_faq($idUtilisateur) {

        $question_edition = $_POST['question_edition'];
        $reponse_edition = $_POST['reponse_edition'];
        $numero_editionbis = $_POST['numero_editionbis'];
        $numero_edition = $_POST['numero_edition'];
    
        

        require '../model/model_connexion.php';
        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM faq WHERE (numero = ?) ');
        $requete->execute(array($numero_editionbis));
        $donnees = $requete->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete1 = $bdd->prepare('SELECT * FROM faq WHERE (numero=? )');
            $requete1->execute(array($numero_edition));
            $donnees1 = $requete1->fetch();
            $requete2 = $bdd->prepare('DELETE FROM faq WHERE (numero=? )');
            $requete2->execute(array($numero_edition));
            $requete3 = $bdd->prepare('UPDATE faq SET numero=? WHERE numero=?');
            if( $numero_editionbis < $numero_edition) {
                for ($i=$numero_edition-1;$i >=$numero_editionbis; $i--){
                    $requete3->execute(array($i+1,$i));
                }
            }  
            else {
                for ($i=$numero_edition+1;$i <=$numero_editionbis; $i++){
                    $requete3->execute(array($i-1,$i));
                }
            }
            $requete4 = $bdd->prepare('INSERT INTO faq(question,reponse,numero,idUtilisateur) VALUES (?,?,?,?)' );
            $requete4->execute(array($question_edition,$reponse_edition,$numero_editionbis,$idUtilisateur));
            
        }
        
    }

    function modifier_faq2($idUtilisateur) {

        $question_edition = $_POST['question_edition2'];
        $reponse_edition = $_POST['reponse_edition2'];
        $numero_editionbis = $_POST['numero_editionbis2'];
        $numero_edition = $_POST['numero_edition2'];
    
        

        require '../model/model_connexion.php';
        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM faq WHERE (numero = ?) ');
        $requete->execute(array($numero_editionbis));
        $donnees = $requete->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete1 = $bdd->prepare('SELECT * FROM faq WHERE (numero=? )');
            $requete1->execute(array($numero_edition));
            $donnees1 = $requete1->fetch();
            $requete2 = $bdd->prepare('DELETE FROM faq WHERE (numero=? )');
            $requete2->execute(array($numero_edition));
            $requete3 = $bdd->prepare('UPDATE faq SET numero=? WHERE numero=?');
            if( $numero_editionbis < $numero_edition) {
                for ($i=$numero_edition-1;$i >=$numero_editionbis; $i--){
                    $requete3->execute(array($i+1,$i));
                }
            }  
            else {
                for ($i=$numero_edition+1;$i <=$numero_editionbis; $i++){
                    $requete3->execute(array($i-1,$i));
                }
            }
            $requete4 = $bdd->prepare('INSERT INTO faq(question,reponse,numero,idUtilisateur) VALUES (?,?,?,?)' );
            $requete4->execute(array($question_edition,$reponse_edition,$numero_editionbis,$idUtilisateur));
            
        }
        
    }
 