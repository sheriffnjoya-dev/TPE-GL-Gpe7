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
                    <form action="../Models/etudiant.php" method="post">
                        <label class="label" id="label1">MATRICULE:</label>
                        <input class="input" type="text" name="matricule" placeholder="Entrez le matricule">
                        <input class="input" id="bouton" type="submit" name="btnDelete" value="Supprimer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>