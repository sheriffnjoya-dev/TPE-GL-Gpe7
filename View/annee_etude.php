<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/annee_etude.css" >
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
                    <form action="semestre.php" method="post">
                        <label class="form-label" for="choix_annee">ANNEE ETUDE :</label>
                        <select class=form-control>
                            <option value=module>2015-2016</option>
                            <option value=module>2016-2017</option>
                            <option value=module>2017-2018</option>
                            <option value=module>2018-2019</option>
                        </select>
                        <input class="input" id="bouton" type="submit" name="btnSave" value="SAVE">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'tools/footer.php'; ?>
</body>
</html>