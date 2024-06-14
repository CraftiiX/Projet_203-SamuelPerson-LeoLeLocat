<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion a Confiz</title>
    <link rel="stylesheet" href="login.css">
</head>

<?php
            if (isset($_SESSION["error"])){
                echo ($_SESSION["error"]);
                unset($_SESSION["error"]);
            }
        ?>
    </p>
  
    <form class="formulaire" action="verif_connexion.php" method="post">
        <div class="form-group">
            <label for="username">Identifiant : </label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="mdp">Password</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Valider</button>
    </form>

</html>