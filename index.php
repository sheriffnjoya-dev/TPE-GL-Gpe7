<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Assets/css/admin.css" >
</head>
<body>
    <div class="bloc">
        <div>
            <?php
                if(isset($_SESSION['Erreur'])){
                    echo $_SESSION['Erreur'];
                    unset($_SESSION['Erreur']);
                }
            ?>
        </div>
        <form action="Models/connexion.php" method="post">
            <label class="label"> UserName : </label>
            <input class="input" type="text" name="username" placeholder="Entrez votre username" required>
            <label class="label"> Password : </label>
            <input class="input"  type="password" name="password" placeholder="Entrez votre password" required>
            <input class="bouton" type="submit" name="bouton" value="Se connecter">
        </form>
    </div>
</body>
</html>