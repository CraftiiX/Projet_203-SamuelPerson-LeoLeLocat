<?php
include_once ("requests_functions.php");
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="fr">

<!--Groupe 8 Samuel PERSON et Léo LE LOCAT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confiz</title>
    <link rel="stylesheet" href="layout.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <nav>
        <div class="menu">
            <div class="france">
                <img src="media/images/france.png" alt="drapeau_France">
                <p>FR</p>
            </div>
            <?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            }
            ?>
        </div>
    </nav>

    <main>

        <!--     php
    $user = $_POST["username"];
    take_name($user);
    test
    ?  -->


        <?php
       // $user = $_POST["username"];
       // $test = requete("select * from utilisateurs where username='$user'");
        //foreach ($test as $uservar)
        ?> 

        <h1>Bienvenue <?php
        // echo ($uservar["prenom"]) ?></h1>

        <div class="Type_shop">
            <h1>Choisissez votre boutique </h1>
        </div>

        <section>
        <?php
        $boutiques = requete('select * from boutiques');
        foreach ($boutiques as $shop) {
        ?>
        <article class="boutique">
            <a href="catalogue.php?shopid=<?php echo($shop["id"]); ?>" class="img_bas"><img src="media/images/shop1.png"
                    alt="Logo_boutique_ville1"></a>
            <h2 class="shopname"><?php echo($shop["nom"]); ?></h2>
            <div class="button_quantite">
            <form action="supprimer_boutique.php" method="post">
                    <input type="hidden" name="boutique_id" value="<?php echo($shop["id"]); ?>">
                    <button type="submit" alt="Retirer la boutique">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>
                </form>
                <p class="suppshop">supprimer la boutique</p>
                    </div>
        </article>

            <?php
            }
            ?>

        </section>

        <div class="confiz"><img src="media/images/confiz.png" alt="Logo_confiz"></div>
        </main>
        <footer>

            <div class="foot_left">
                <p>Réalisé par Samuel PERSON et Léo LE LOCAT</p>
            </div>

            <div class="foot_right">
            <a href="https://www.laboutiqueharibo.fr/"><img src="media/images/haribo.png" alt="Logo Haribo ramenant vers la boutique officielle"></a>
            </div>

        </footer>
    
</body>

</html>