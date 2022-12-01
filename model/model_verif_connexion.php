<?php

function BonId($bdd, $email, $mdp)
{
    // Original, ne marche que si les mdp ne sont pas cryptés
    /*
    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE email = ? AND mdp = ?");
    $req -> execute(array($email, $mdp));
    $count = $req->rowCount();

    if ($count!=0) {
        return true;
    }
    else{
        return false;
    }
    */

    // Marche que si les mots de passe sont cryptés

    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $query = 'SELECT * FROM utilisateur WHERE (email = :email)';
    $values = ['email'=> $email];
    
    try {
        $res=$bdd->prepare($query);
        $res->execute($values);
    }
    catch(PDOException $e){
        die();
    }
    $row=$res->fetch(PDO::FETCH_ASSOC);
    if(is_array($row)){
        if(password_verify($mdp,$row['mdp'])){
            return true ;
        }
    }
}

