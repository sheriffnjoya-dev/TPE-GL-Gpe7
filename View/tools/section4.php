<section>
    <div class="global1">
        <div class="menu">
            <p class="para">MENU</p>
            <ul class="style_bout">
                <li class="bouton"><a class="boutons" id="bouton1" href="ajouter.php">AJOUTER</a></li>
                <li class="bouton"><a class="boutons" id="bouton3" href="supprimer.php">SUPPRIMER</a></li>
                <li class="bouton"><a class="boutons" id="bouton4" href="consulter.php">CONSULTER</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="add">
            <ul class="style_nav1">
                <li class="style_list_nav1"><a class="style_a_nav1" href="">TELECHARGER</a></li>
                <li class="style_list_nav1"><a class="style_a_nav1" href="../fpdf/index.php">IMPRIMER</a></li>
            </ul>
        </div>

        <div class="global2">
            <div class="nav">
                <div class="ajouter">
                    <form action="consulter.php" method="post">
                        <label class="label" id="label5">matricule:</label>
                        <input class="input" type="text" name="matricule" placeholder="Entrez votre matricule" required>
                        <input class="input" id="bouton" type="submit" name="btnSearch" value="Rechercher">
                    </form>
                </div>
                <div class = "tableau" style="height: 334px; overflow: auto;">
                    <table style="width:90%;">
                        <thead style="background-color: black; color: white;">
                        <tr>
                            <td>N°</td>
                            <td>MATRICULE</td>
                            <td>NOM</td>
                            <td>PRENOM</td>
                            <td>FILIERE</td>
                            <td>DATE DE NAISSANCE</td>
                            <td>LIEU</td>
                            <td>NIVEAU</td>
                            <td>VOIR</td>
                        </tr>
                        </thead>
                        <tbody>

                            <?php
                            require_once ('../core/config.php');
                            require_once ('../core/bdd.php');

                            if(isset($_POST['btnSearch'])){
                                $req = $bd->query("SELECT * FROM etudiant WHERE matricule_etudiant='".$_POST['matricule']."'") or die(mysql_error());
                                $res = $req->fetch();
                            ?>
                            <tr>
                                <td><?php echo 1; ?></td>
                                <td><?php echo $res['matricule_etudiant']; ?></td>
                                <td><?php echo $res['nom_etudiant']; ?></td>
                                <td><?php echo $res['prenom_etudiant']; ?></td>
                                <td><?php echo $res['filiere_etudiant']; ?></td>
                                <td><?php echo $res['date_naissance_etudiant']; ?></td>
                                <td><?php echo $res['lieu_naissance_etudiant']; ?></td>
                                <td><?php echo $res['niveau_etude_etudiant']; ?></td>
                                <td>
                                    <form action="modifier.php" method="post">
                                        <input type="hidden" name="matriculeModif" value="<?php echo $res['matricule_etudiant']; ?>">
                                        <button class="option" name="btnView">VOIR</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }else{
                            $i=1;
                            $req = $bd->query("SELECT * FROM etudiant") or die(mysql_error());
                            while($res = $req->fetch()){
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $res['matricule_etudiant']; ?></td>
                                    <td><?php echo $res['nom_etudiant']; ?></td>
                                    <td><?php echo $res['prenom_etudiant']; ?></td>
                                    <td><?php echo $res['filiere_etudiant']; ?></td>
                                    <td><?php echo $res['date_naissance_etudiant']; ?></td>
                                    <td><?php echo $res['lieu_naissance_etudiant']; ?></td>
                                    <td><?php echo $res['niveau_etude_etudiant']; ?></td>
                                    <td>
                                        <form action="modifier.php" method="post">
                                            <input type="hidden" name="matriculeModif" value="<?php echo $res['matricule_etudiant']; ?>">
                                            <button class="option" name="btnView">VOIR</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>