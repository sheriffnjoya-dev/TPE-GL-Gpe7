<?php

    require_once ('../core/config.php');
    require_once ('../core/bdd.php');
    require_once ('../Controller/connexion.php');

    if(isset($_POST['bouton'])){
        $user = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);

        connexion($bd,$user,$pass);
    }
?>