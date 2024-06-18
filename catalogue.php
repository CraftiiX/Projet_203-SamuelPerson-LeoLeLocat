<?php
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

    <link rel="stylesheet" href="index.html">
    <link rel="stylesheet" href="produit.html">
    <link rel="stylesheet" href="catalogue.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <nav>
        <div class="menu">

            <div class="Accueil">
                <p>Accueil </p>
            </div>
            <!--    PHP A COMPLETER 
                BARRE DE RECHERCHE   -->

            <div class="Catalogue">
                <p>Catalogue </p>
            </div>

        </div>
    </nav>

    <main>
        <div class="titles">
            <h1>Catalogue</h1>
            <h2>Tous les bonbons de la boutique Haribo de 123</h2>

        </div>

        <section>

        <?php
            $idshop = $_GET["shopid"];
            $stock = requete("select confiserie_id from stocks where boutique_id=$idshop");
            foreach ($stock as $stockvar) {
            $product = requete("select * from confiseries where id= $stockvar");
            foreach ($product as $bonbons) {
                ?>
                <article>
                    <a href="produit.php?productid=<?php echo($bonbons["id"]); ?>">
                        <img src="media/images/<?php echo($bonbons["illustration"]);?>" alt="">
                    </a>
                    <div class="button_quantite">
                        <p><?php echo($bonbons["nom"]);?></p>
                        <button alt="Retirer une unité du stock">
                            <img src="media/images/bouton_moins.png" alt="bouton moins">
                        </button>

                        <button alt="Ajouter une unité au stock">
                            <img src="media/images/bouton_plus.png" alt="bouton plus">
                        </button>
                    </div>

                    <div class="price">
                        <p><?php echo ($bonbons["prix"]);?> €</p>
                        <p>Quantité : </p>
                    </div>
                </article>
                <?php
            }
        }
            ?>


        </section>

        <footer>

            <div class="foot_left">
                <p>Réalisé par Samuel PERSON et Léo LE LOCAT</p>
            </div>

            <div class="foot_right">
                <a href="#"><img src="media/images/haribo.png" alt="Logo_Haribo"></a>
            </div>

        </footer>
    </main>
</body>

</html>