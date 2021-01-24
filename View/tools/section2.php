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

        <div class="global2">
            <div class="nav">
                <div class="ajouter">
                    <?php if(isset($_POST['btnView'])){
                        require_once ('../core/config.php');
                        require_once ('../core/bdd.php');
                        $req = $bd->query("SELECT * FROM etudiant WHERE matricule_etudiant='".$_POST['matriculeModif']."'") or die(mysql_error());
                        $rep = $req->fetch();
                    ?>
                    <form action="../Models/etudiant.php" method="post">
                        <input class="input" type="hidden" name="matricule" value="<?php echo $_POST['matriculeModif']; ?>" placeholder="Entrez votre user name" required>
                        <label class="label" id="label3">Username:</label>
                        <input class="input" type="text" name="nom_etudiant" value="<?php echo $rep['nom_etudiant']; ?>" placeholder="Entrez votre user name" required>
                        <label class="label" id="label4">First name: </label>
                        <input class="input" type="text" name="prenom_etudiant" value="<?php echo $rep['prenom_etudiant']; ?>" placeholder="Entrez votre first name" required>
                        <label class="label" id="label8">Filière: </label>
                        <input class="input" type="text" name="filiere_etudiant" value="<?php echo $rep['filiere_etudiant']; ?>" placeholder="Entrez votre filière" required>
                        <label class="label" id="label5">Date de naissance: </label>
                        <input class="input" type="text" name="date_naissance_etudiant" value="<?php echo $rep['date_naissance_etudiant']; ?>" placeholder="Entrez votrez date de naissance" required>
                        <label class="label" id="label6">Lieu de naissance: </label>
                        <input class="input" type="text" name="lieu_naissance_etudiant" value="<?php echo $rep['lieu_naissance_etudiant']; ?>" placeholder="Entrez votre lieu de naissance" required>
                        <label class="label" id="label7">Niveau etude:</label>
                        <input class="input" type="text" name="niveau_etude_etudiant" value="<?php echo $rep['niveau_etude_etudiant']; ?>" placeholder="Entrez votre level of study" required>
                        <input class="input" id="bouton" type="submit" name="btnModif" value="MODIFIER">
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>