<?php


    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email=?');
    $req->execute([$email]);
    $user = $req->fetch();



?>