<?php
    
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