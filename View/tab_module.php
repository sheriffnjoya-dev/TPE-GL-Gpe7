<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/tab_module.css" >
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
                <li class="style_list_nav1"><a class="style_a_nav1" href="">TELECHARGER</a></li>
                <li class="style_list_nav1"><a class="style_a_nav1" href="">IMPRIMER</a></li>
            </ul>
        </div>

        <div class="global2">
            <div class="nav">
                <div class="ajouter">
                    <form action="tab_module.php" method="post">
                        <label class="label" id="label">NOM ET PRENOM:</label>
                        <?php
                        require_once ('../core/config.php');
                        require_once ('../core/bdd.php');
                        if(isset($_POST['btnModule'])){
                            $req = $bd->query("SELECT * FROM suivie s, enseignant en, etudiant e, module m, unite_enseignement u WHERE s.id_enseignant = en.id_enseignant and s.id_etudiant = e.id_etudiant and s.id_unite_enseignement = u.id_unite_enseignement and u.id_module = m.id_module and e.filiere_etudiant='".$_POST["choix_dep"]."' and e.niveau_etude_etudiant'".$_POST["choix_niveau"]."' and m.nom_module='".$_POST["choix_module"]."' and e.matricule_etudiant='".$_POST["matricule"]."'") or die(mysql_error());
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
                            <td>NOM UE</td>
                            <td>ENSEIGNENT</td>
                            <td>NOTE CC</td>
                            <td>NOTE TPE</td>
                            <td>NOTE EXAMEN</td>
                            <td>NOTE RATTRAPAGE</td>
                            <td>MOYENNE</td>
                            <td>GRADE</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        require_once ('../core/config.php');
                        require_once ('../core/bdd.php');
                        if(isset($_POST['btnAfficheModule'])){
                            $i=1;
                            $prod=1;
                            $som=0;
                            $req = $bd->query("SELECT * FROM suivie s, enseignant en, etudiant e, module m, unite_enseignement u
                                                          WHERE s.id_enseignant = en.id_enseignant and s.id_etudiant = e.id_etudiant and 
                                                          s.id_unite_enseignement = u.id_unite_enseignement and u.id_module = m.id_module 
                                                          and e.filiere_etudiant='".$_POST["choix_dep"]."' and 
                                                          e.niveau_etude_etudiant='".$_POST["choix_niveau"]."' and 
                                                          m.nom_module='".$_POST["choix_module"]."' and 
                                                          e.matricule_etudiant='".$_POST["matricule"]."'") or die(mysql_error());

                            //$req = $bd->query("SELECT * FROM module m WHERE m.nom_module='".$_POST["choix_module"]."'") or die(mysql_error());
                            while($res = $req->fetch()){
                                if($res['note_rattrapage']==NULL) {
                                    $prod = (($res['note_cc'] * 0.3) + ($res['note_tpe'] * 0.2) + ($res['note_examen'] * 0.5));
                                }else{
                                    $prod = (($res['note_cc'] * 0.3) + ($res['note_tpe'] * 0.2) + ($res['note_rattrapage'] * 0.5));
                                }
                                /*$reqs = $bd->query("SELECT * FROM unite_enseignement u, suivie s, etudiant e, enseignant t
                                                              WHERE u.id_unite_enseignement=s.id_unite_enseignement AND u.id_module='".$res['id_module']."'
                                                              AND s.id_enseignant=t.id_enseignant AND s.id_etudiant=e.id_etudiant") or die(mysql_error());
                                while($ress = $reqs->fetch()){
                                    if($ress['note_rattrapage']==NULL) {
                                        $prod = (($ress['note_cc'] * 0.3) + ($ress['note_tpe'] * 0.2) + ($ress['note_examen'] * 0.5));
                                    }else{
                                        $prod = (($ress['note_cc'] * 0.3) + ($ress['note_tpe'] * 0.2) + ($ress['note_rattrapage'] * 0.5));
                                    }*/
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $res['nom_unite_enseignement']; ?></td>
                                    <td><?php echo $res['nom_enseignant']; ?></td>
                                    <td><?php echo $res['note_cc']; ?></td>
                                    <td><?php echo $res['note_tpe']; ?></td>
                                    <td><?php echo $res['note_examen']; ?></td>
                                    <td><?php echo $res['note_rattrapage']; ?></td>
                                    <td><?php echo $prod; ?></td>
                                    <td><?php echo $res['grade']; ?></td>
                                </tr>

                                <?php $i++; $som+=$prod; }} ?>
                        </tbody>
                        <tfooter>
                            <tr>
                                <td colspan="2">NOTE FINAL</td>
                                <td colspan="7"><?php if($i!=0){$som; $i; echo $som/($i-1);}else{ $som; $i; echo $som/($i+1);} ?></td>
                            </tr>
                        </tfooter>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'tools/footer.php'; ?>
</body>
</html>