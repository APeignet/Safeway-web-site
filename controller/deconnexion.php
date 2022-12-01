<?php
 
    session_start();
    session_destroy();
    header('Location: ../controller/controller_authentification_fr.php')

/*
    if (isset($_SESSION['email'])){

        $_SESSION = array();
        session_destroy();
        setcookie('login', '');
        setcookie('pass_hache','');

        header("Location : ../controller/controller_authentification_fr.php");
    } else {
        header("Location : ../controller/controller_authentification_fr.php");
    }
 
*/    
 
?>