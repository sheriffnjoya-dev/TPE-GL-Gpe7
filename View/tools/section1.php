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
                        <label class="label" id="label1">matricule:</label>
                        <input class="input" type="text" name="matricule" placeholder="Entrez votre matricule" required>
                        <label class="label" id="label2">Username:</label>
                        <input class="input" type="text" name="user" placeholder="Entrez votre user name" required>
                        <label class="label" id="label3">First name: </label>
                        <input class="input" type="text" name="first_name" placeholder="Entrez votre first name" required>
                        <label class="label" id="label7">Filière: </label>
                        <select class="input" name="filiere_etudiant">
                            <option VALUE="AGELP">AGELP</option>
                            <option VALUE="ENREN">ENREN</option>
                            <option VALUE="GCA">GCA</option>
                            <option VALUE="GTC">GTC</option>
                            <option value="INFOTEL">INFOTEL</option>
                            <option VALUE="SCIENCE EN VIE">SCIENCE EN VIE</option>
                        </select>
                        <label class="label" id="label4">Date de naissance: </label>
                        <input class="input" type="text" name="date_naissance" placeholder="Entrez votre date de naissance" required>
                        <label class="label" id="label5">Lieu  de naissance: </label>
                        <input class="input" type="text" name="lieu" placeholder="Entrez votre lieu de naissance" required>
                        <label class="label" id="label6">Niveau etude:</label>
                        <select class="input" name="level_of_study">
                            <option VALUE="LICENCE I">LICENCE I</option>
                            <option VALUE="LICENCE II">LICENCE II</option>
                            <option VALUE="LICENCE III">LICENCE III</option>
                            <option VALUE="MASTER I">MASTER I</option>
                            <option value="MASTER II">MASTER II</option>
                        </select>
                        <input class="input" id="bouton" type="submit" name="ajouter" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>