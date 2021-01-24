<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/imprimer.css">
</head>
<body>
<?php include_once 'tools/header.php'; ?>
<section>
    <div class="global1">
        <div class="menu">
            <p class="para">MENU</p>
            <ul class="style_bout">
                <li class="bouton"><a class="boutons" id="bouton1" href="unite_enseignement.php">UNITE ENSEIGNEMENT</a></li>
                <li class="bouton"><a class="boutons" id="bouton1" href="module.php">MODULE</a></li>
                <li class="bouton"><a class="boutons" id="bouton2" href="semestre.php">SEMESTRE</a></li>
                <li class="bouton"><a class="boutons" id="bouton3" href="annee_etude.php">ANNEE ETUDE</a></li>
                <li class="bouton"><a class="boutons" id="bouton4" href="annee_module.php">ANNEE/MODULE</a></li>
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
                    <form action="" method="post">
                        <label class="label">MATRICULE:</label>
                        <label class="label">NOM:</label>
                        <label class="label">PRENOM:</label>
                        <label class="label">FILIERE:</label>
                        <label class="label">NIVEAU:</label>
                        <label class="label">NOTE CONTROLE CONTINU:</label>
                        <label class="label">NOTE TPE:</label>
                        <label class="label">NOTE EXAMEN:</label>
                        <label class="label">NOTE RATTRAPAGE:</label>
                        <label class="label">MOYENNE:</label>
                        <label class="label">GRADE:</label>
                        <input class="input" id="bouton" type="submit" name="btnImprim" value="IMPRIMER">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once 'tools/footer.php'; ?>
</body>
</html>