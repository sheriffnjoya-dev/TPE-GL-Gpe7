<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/tab_semestre.css" >
</head>
<body>
<?php include_once 'tools/header.php'; ?>
<section>
    <div class="global1">
        <div class="menu">
            <p class="para">MENU</p>
            <ul class="style_bout">
                <li class="bouton"><a class="boutons" id="bouton0" href="unite_enseignement.php">UNITE ENSEIGNEMENT</a></li>
                <li class="bouton"><a class="boutons" id="bouton1" href="module.php">MODULE</a></li>
                <li class="bouton"><a class="boutons" id="bouton2" href="semestre.php">SEMESTRE</a></li>
                <li class="bouton"><a class="boutons" id="bouton3" href="annee_etude.php.php">ANNEE ETUDE</a></li>
                <li class="bouton"><a class="boutons" id="bouton4" href="annee_module.php.php">ANNEE/MODULE</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="add">
            <ul class="style_nav1">
                <li class="style_list_nav1"><a class="style_a_nav1" href="../fpdf/ue_imprimer.php">TELECHARGER</a></li>
                <li class="style_list_nav1"><a class="style_a_nav1" href="">IMPRIMER</a></li>
            </ul>
        </div>

        <div class="global2">
            <div class="nav">
                <div class="ajouter">
                    <form action="tab_semestre.php" method="post">
                        <label class="label" id="label">NOM ET PRENOM:</label>
                        <?php
                        require_once ('../core/config.php');
                        require_once ('../core/bdd.php');
                        if(isset($_POST['btnSemestre'])){
                            $req = $bd->query("SELECT * FROM suivie s, enseignant en, etudiant e, unite_enseignement u 
                                                         WHERE s.id_enseignant = en.id_enseignant and 
                                                         s.id_etudiant = e.id_etudiant and 
                                                         s.id_unite_enseignement = u.id_unite_enseignement and 
                                                         e.filiere_etudiant='".$_POST["choix_dep"]."' and 
                                                         e.niveau_etude_etudiant='".$_POST["choix_niveau"]."' and 
                                                         s.semestre='".$_POST["choix_semestre"]."' and 
                                                         e.matricule_etudiant='".$_POST["matricule"]."'") or die(mysql_error());
                            if($res = $req->fetch()){
                                ?>
                                <label class="input" name="nom_etudiant"><?php echo $res['nom_etudiant']; ?></label>
                                <label class="inputs" name="prenom_etudiant"><?php echo $res['prenom_etudiant']; ?></label>
                            <?php }}?>
                    </form>
                </div>
                <div class = "tableau" style="height: 334px; overflow: auto;">
                    <table style="width:90%;">
                        <thead style="background-color: black; color: white;">
                        <tr>
                            <td>N°</td>
                            <td>ENSEIGNANT</td>
                            <td>NOTE CC</td>
                            <td>NOTE TPE</td>
                            <td>NOTE EXAMEN</td>
                            <td>NOTE RATTRAPAGE</td>
                            <td>MOYENNE</td>
                            <td>GRADE</td>
                            <td>VOIR</td>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        require_once ('../core/config.php');
                        require_once ('../core/bdd.php');
                        if(isset($_POST['btnSemestre'])){
                            $req = $bd->query("SELECT * FROM suivie s, enseignant en, etudiant e, unite_enseignement u WHERE s.id_enseignant = en.id_enseignant and s.id_etudiant = e.id_etudiant and s.id_unite_enseignement = u.id_unite_enseignement and e.filiere_etudiant='".$_POST["choix_dep"]."' and e.niveau_etude_etudiant='".$_POST["choix_niveau"]."' and s.semestre='".$_POST["choix_semestre"]."' and e.matricule_etudiant='".$_POST["matricule"]."'") or die(mysql_error());
                            $i=1;
                            while($res = $req->fetch()){
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $res['nom_enseignant']; ?></td>
                                    <td><?php echo $res['note_cc']; ?></td>
                                    <td><?php echo $res['note_tpe']; ?></td>
                                    <td><?php echo $res['note_examen']; ?></td>
                                    <td><?php echo $res['note_rattrapage']; ?></td>
                                    <td><?php echo $res['moyenne']; ?></td>
                                    <td><?php echo $res['grade']; ?></td>
                                    <td>
                                        <form action="../fpdf/ue_imprimer.php" method="post">
                                            <input type="hidden" name="matriculeImprim" value="<?php echo $res['nom_enseignant']; ?>">
                                            <button class="option" name="btnVoir">VOIR</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $i++; }}?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'tools/footer.php'; ?>
</body>
</html>