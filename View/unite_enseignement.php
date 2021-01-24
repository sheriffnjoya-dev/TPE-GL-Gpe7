<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/unite_enseignement.css" >
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
                    <li class="bouton"><a class="boutons" id="bouton3" href="annee_etude.php">ANNEE ETUDE</a></li>
                    <li class="bouton"><a class="boutons" id="bouton4" href="annee_module.php">ANNEE/MODULE</a></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="global2">
                <div class="nav">
                    <div class="ajouter">
                        <form action="tab_unite_enseignement.php" method="post">
                            <label class="form" id="form-label1">DEPARTEMENT :</label>
                            <select class="form" id=form-control1 name="choix_dep">
                                <option>AGELP</option>
                                <option>ENREN</option>
                                <option>GCA</option>
                                <option>GTC</option>
                                <option>HYMAE</option>
                                <option>INFOTEL</option>
                                <option>SCIENCE EN VIE</option>
                            </select>
                            <label class="form" id="form-label2">NIVEAU ETUDE :</label>
                            <select class="form" id=form-control2 name="choix_niveau">
                                <option>LICENCE I</option>
                                <option>LICENCE II</option>
                                <option>LICENCE III</option>
                                <option>MASTER I</option>
                                <option>MASTER II</option>
                            </select>
                            <label class="form" id="form-label">UNITE ENSEIGNEMENT :</label>
                            <select class="form" id=form-control name="choix_ue">
                                <?php
                                require_once ('../core/config.php');
                                require_once ('../core/bdd.php');
                                $req = $bd->query("SELECT * FROM unite_enseignement") or die(mysql_error());
                                while($res = $req->fetch()){
                                ?>
                                    <option value="<?php echo $res['nom_unite_enseignement']; ?>"><?php echo $res['nom_unite_enseignement']; ?></option>
                                <?php }?>
                            </select>
                            <input class="input" id="bouton" type="submit" name="btnUnite_enseignement" value="SAVE">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'tools/footer.php'; ?>
</body>
</html>