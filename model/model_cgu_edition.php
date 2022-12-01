<?php 

    function ajouter_cgu($idUtilisateur) {

        
        $detail_ajout = $_POST['detail_ajout'];
        $numero_ajout = $_POST['numero_ajout'];        
        
        require '../model/model_connexion.php';

        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM cgu WHERE (numero = ?) ');
        $requete->execute(array($numero_ajout));
        $donnees = $requete->fetch();
        $requete1 = $bdd->query('SELECT COUNT(numero) as nombre_detail FROM cgu');
        $donnees1 = $requete1->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete2 = $bdd->prepare('UPDATE cgu SET numero=? WHERE numero=?');
            for ($i=$donnees1['nombre_detail'];$i >=$numero_ajout; $i--){
                $requete2->execute(array($i+1,$i));
            }
        }
        $requete3 = $bdd->prepare('INSERT INTO cgu(detail,numero,idUtilisateur) VALUES (?,?,?)' );
        $requete3->execute(array($detail_ajout,$numero_ajout,$idUtilisateur));
    
    }

    function ajouter_cgu2($idUtilisateur) {

        
        $detail_ajout = $_POST['detail_ajout2'];
        
        $numero_ajout = $_POST['numero_ajout2'];
        

        require '../model/model_connexion.php';

        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM cgu WHERE (numero = ?) ');
        $requete->execute(array($numero_ajout));
        $donnees = $requete->fetch();
        $requete1 = $bdd->query('SELECT COUNT(numero) as nombre_detail FROM cgu');
        $donnees1 = $requete1->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete2 = $bdd->prepare('UPDATE cgu SET numero=? WHERE numero=?');
            for ($i=$donnees1['nombre_detail'];$i >=$numero_ajout; $i--){
                $requete2->execute(array($i+1,$i));
            }
        }
        $requete3 = $bdd->prepare('INSERT INTO cgu(detail,numero,idUtilisateur) VALUES (?,?,?)' );
        $requete3->execute(array($detail_ajout,$numero_ajout,$idUtilisateur));
    
    }

    function modifier_cgu($idUtilisateur) {

        $detail_edition = $_POST['detail_edition'];
        
        $numero_editionbis = $_POST['numero_editionbis'];
        $numero_edition = $_POST['numero_edition'];
    
        

        require '../model/model_connexion.php';
        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM cgu WHERE (numero = ?) ');
        $requete->execute(array($numero_editionbis));
        $donnees = $requete->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete1 = $bdd->prepare('SELECT * FROM cgu WHERE (numero=? )');
            $requete1->execute(array($numero_edition));
            $donnees1 = $requete1->fetch();
            $requete2 = $bdd->prepare('DELETE FROM cgu WHERE (numero=? )');
            $requete2->execute(array($numero_edition));
            $requete3 = $bdd->prepare('UPDATE cgu SET numero=? WHERE numero=?');
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
            $requete4 = $bdd->prepare('INSERT INTO cgu(detail,numero,idUtilisateur) VALUES (?,?,?)' );
            $requete4->execute(array($detail_edition,$numero_editionbis,$idUtilisateur));
            
        }
        
    }

    
        
    function modifier_cgu2($idUtilisateur) {

        $detail_edition = $_POST['detail_edition2'];
        $numero_editionbis = $_POST['numero_editionbis2'];
        $numero_edition = $_POST['numero_edition2'];
    
        

        require '../model/model_connexion.php';
        $requete = $bdd->prepare('SELECT COUNT(numero) as nombre_numero FROM cgu WHERE (numero = ?) ');
        $requete->execute(array($numero_editionbis));
        $donnees = $requete->fetch();
        if ($donnees['nombre_numero'] > 0){
            $requete1 = $bdd->prepare('SELECT * FROM cgu WHERE (numero=? )');
            $requete1->execute(array($numero_edition));
            $donnees1 = $requete1->fetch();
            $requete2 = $bdd->prepare('DELETE FROM cgu WHERE (numero=? )');
            $requete2->execute(array($numero_edition));
            $requete3 = $bdd->prepare('UPDATE cgu SET numero=? WHERE numero=?');
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
            $requete4 = $bdd->prepare('INSERT INTO cgu(detail,numero,idUtilisateur) VALUES (?,?,?)' );
            $requete4->execute(array($detail_edition,$numero_editionbis,$idUtilisateur));
            
        }
        
    }
 