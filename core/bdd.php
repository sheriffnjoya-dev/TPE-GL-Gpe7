<?php
    try{
        $bd=new PDO('mysql:host='.$bd_host.';dbname='.$bd_name.'',$bd_user,$bd_pass);
        $bd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch (Exception $e){echo"Error de connexion à la base de donnée";die;}
    return $bd;
?>