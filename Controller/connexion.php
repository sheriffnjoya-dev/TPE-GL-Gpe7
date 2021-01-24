<?php
    function connexion($bd, $user, $pass){
        //$query = "SELECT * FROM enseignant WHERE login='".$user."' AND '".$pass."'";

        $q = $bd->query("SELECT * FROM enseignant WHERE login='".$user."' AND password='".$pass."'") or die(mysql_error());
        $res = $q->fetch();

        /*$q->bindValue(':users',$user);
        $q->bindValue(':pass',$pass);*/

        if($res == NULL){
            $_SESSION['Erreur'] = "login ou mot de passe incorrect";
            header('location: ../index.php');
        } else{
            header('location: ../View/acceuil.php');
        }
    }

?>