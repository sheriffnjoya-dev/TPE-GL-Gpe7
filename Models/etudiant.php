<?php
    require_once ('../core/config.php');
    require_once ('../core/bdd.php');
    require_once ('../Controller/etudiant.php');

    if(isset($_POST['ajouter'])){
        $matricule = htmlspecialchars($_POST['matricule']);
        $name = htmlspecialchars($_POST['user']);
        $prenom = htmlspecialchars($_POST['first_name']);
        $filiere = htmlspecialchars($_POST['filiere_etudiant']);
        $date_naissance = htmlspecialchars($_POST['date_naissance']);
        $lieu = htmlspecialchars($_POST['lieu']);
        $niveau = htmlspecialchars($_POST['level_of_study']);

        etudiant($bd, $matricule, $name, $prenom, $filiere, $date_naissance, $lieu, $niveau);
    }

    if(isset($_POST['btnDelete'])){
        $mat = htmlspecialchars($_POST['matricule']);

        delete_etudiant($bd,$mat);
    }

    if(isset($_POST['btnModif'])){
        $matricule = htmlspecialchars($_POST['matricule']);
        $name = htmlspecialchars($_POST['nom_etudiant']);
        $prenom = htmlspecialchars($_POST['prenom_etudiant']);
        $filiere = htmlspecialchars($_POST['filiere_etudiant']);
        $date_naissance = htmlspecialchars($_POST['date_naissance_etudiant']);
        $lieu = htmlspecialchars($_POST['lieu_naissance_etudiant']);
        $niveau = htmlspecialchars($_POST['niveau_etude_etudiant']);

        modif_etudiant($bd, $matricule, $name, $prenom, $filiere, $date_naissance, $lieu, $niveau);
    }