<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/annee_module.css" >
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
                        <label class="label" id="label5">ANNEE/MODULE:</label>
                        <input class="input" type="text" name="annee_module" placeholder="Entrez l'année par module des etudiants à rechercher" required>
                        <input class="input" id="bouton" type="submit" name="bouton" value="Rechercher">
                    </form>
                </div>
                <div class = "tableau" style="height: 334px; overflow: auto;">
                    <table style="width:90%;">
                        <thead style="background-color: black; color: white;">
                        <tr>
                            <td>N°</td>
                            <td>NOM</td>
                            <td>PRENOM</td>
                            <td>MATRICULE</td>
                            <td>DATE NAISSANCE</td>
                            <td>LIEU</td>
                            <td>NIVEAU</td>
                            <td>VOIR</td>
                        </tr>
                        </thead>
                        <!--<tbody>
<?php/*
                                require_once ('../core/config.php');
                                require_once ('../core/bdd.php');

                                $i=1;
                                $req = $bd->query("SELECT * FROM etudiant") or die(mysql_error());
                                while($res = $req->fetch()){
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $res['matricule_etudiant']; ?></td>
                                        <td><?php echo $res['nom_etudiant']; ?></td>
                                        <td><?php echo $res['prenom_etudiant']; ?></td>
                                        <td><?php echo $res['date_naissance_etudiant']; ?></td>
                                        <td><?php echo $res['lieu_naissance_etudiant']; ?></td>
                                        <td><?php echo $res['niveau_etude_etudiant']; ?></td>
                                        <td><button class="option" name="btnView">VOIR</button></td>
                                    </tr>
                                <?php $i++;  ?>
                            </tbody>-->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once 'tools/footer.php'; ?>
</body>
</html>