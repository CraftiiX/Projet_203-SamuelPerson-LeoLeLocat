<div class="main-container">
    <br>
    <p>
        <?php
            if (isset($_SESSION["error"])){
                echo ($_SESSION["error"]);
                unset($_SESSION["error"]);
            }
        ?>
    </p>
    <form action="verif_connexion.php" method="post">
        <div class="form-group">
            <label for="username">Identifiant : </label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="mdp">Password</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>

<?php
    include_once ("footer.php");
?>