<?php
//ajouter un etudiant
function etudiant($bd, $matricule, $nom, $prenom, $filiere, $date_naissance, $lieu, $niveau){
    $q = $bd->prepare("INSERT INTO etudiant SET
                                              matricule_etudiant= :matricule,
                                              nom_etudiant= :nom,
                                              prenom_etudiant= :prenom,
                                              filiere_etudiant= :filiere,
                                              date_naissance_etudiant= :date_naissance,
                                              lieu_naissance_etudiant= :lieu,
                                              niveau_etude_etudiant= :niveau
                                              ") or die(mysql_error());

    $q->bindValue(':matricule', $matricule);
    $q->bindValue(':nom', $nom);
    $q->bindValue(':prenom', $prenom);
    $q->bindValue(':filiere', $filiere);
    $q->bindValue(':date_naissance', $date_naissance);
    $q->bindValue(':lieu', $lieu);
    $q->bindValue(':niveau', $niveau);

    if($q->execute()){
        header( 'location: ../View/consulter.php');
    } else{
        header( 'location: ../View/index.php');
    }
}

function delete_etudiant($bd,$mat){
    $req = $bd->prepare("DELETE FROM etudiant WHERE matricule_etudiant= :matricule") or die(mysql_error());
    $req->bindValue(':matricule',$mat);
    if($req->execute()){
        header('location:../View/consulter.php');
    }else{
        header('location:../View/consulter.php');
    }
}

function modif_etudiant($bd, $matricule, $nom, $prenom, $filiere, $date_naissance, $lieu, $niveau)
{
    $q = $bd->prepare("UPDATE etudiant SET
                                              nom_etudiant= :nom,
                                              prenom_etudiant= :prenom,
                                              filiere_etudiant= :filiere,
                                              date_naissance_etudiant= :date_naissance,
                                              lieu_naissance_etudiant= :lieu,
                                              niveau_etude_etudiant= :niveau
                                              WHERE matricule_etudiant= '".$matricule."'
                                              ") or die(mysql_error());

    $q->bindValue(':nom', $nom);
    $q->bindValue(':prenom', $prenom);
    $q->bindValue(':filiere', $filiere);
    $q->bindValue(':date_naissance', $date_naissance);
    $q->bindValue(':lieu', $lieu);
    $q->bindValue(':niveau', $niveau);

    if ($q->execute()) {
        header('location: ../View/consulter.php');
    } else {
        header('location: ../View/index.php');
    }

}