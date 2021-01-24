<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/module.css" >
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
                    <form action="tab_module.php" method="post">
                        <label class="form" id="form-label1">DEPARTEMENT :</label>
                        <select class="form" id=form-control1 name="choix_dep">
                            <option value="AGELP">AGELP</option>
                            <option value="ENREN">ENREN</option>
                            <option value="GCA">GCA</option>
                            <option value="GTC">GTC</option>
                            <option value="HYMAE">HYMAE</option>
                            <option value="INFOTEL">INFOTEL</option>
                            <option value="SCIENCE EN VIE">SCIENCE EN VIE</option>
                        </select>
                        <label class="form" id="form-label2">NIVEAU ETUDE :</label>
                        <select class="form" id=form-control2 name="choix_niveau">
                            <option value="LICENCE 1">LICENCE I</option>
                            <option value="LICENCE II">LICENCE II</option>
                            <option value="LICENCE III">LICENCE III</option>
                            <option value="MASTER I">MASTER I</option>
                            <option value="MASTER II">MASTER II</option>
                        </select>
                        <label class="form" id="form-label3">MODULE :</label>
                        <select class="form" id=form-control3 name="choix_module">
                            <?php
                            require_once ('../core/config.php');
                            require_once ('../core/bdd.php');
                            $req = $bd->query("SELECT * FROM module") or die(mysql_error());
                            while($res = $req->fetch()){
                                ?>
                                <option value="<?php echo $res['nom_module']; ?>"><?php echo $res['nom_module']; ?></option>
                            <?php }?>
                        </select>
                        <label class="form-label" id="form-label">MATRICULE :</label>
                        <input class="form_label" id="form-control" type="text" name="matricule" placeholder="Entrez votre matricule" reuired>
                        <input class="input" id="bouton" type="submit" name="btnAfficheModule" value="SAVE">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'tools/footer.php'; ?>
</body>
</html>