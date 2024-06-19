<?php
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue</title>

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
            $varvar = requete("UPDATE stocks SET quantite = quantite + 1 WHERE boutique_id=$idshop");
            $stock = requete("select * from stocks where boutique_id=$idshop");
            foreach ($stock as $stockvar) {
                $product = requete("select * from confiseries where id= $stockvar[confiserie_id]");
                foreach ($product as $bonbons) {
                    ?>
                    <article>
                        <a href="produit.php?productid=<?php echo ($bonbons["id"]); ?>">
                            <img class="imgbonbon" src="media/images/Img_Php/img<?php echo ($bonbons["id"]); ?>.png"
                                alt="Paquet de <?php echo ($bonbons["description"]); ?>">
                        </a>
                        <div class="button_quantite">
                        <form method="POST" action="retirer_bonbon.php">
                                <input type="hidden" name="action" value="decrease">
                                <input type="hidden" name="boutique_id" value="<?php echo $idshop; ?>">
                                <button type="submit" alt="Ajouter une unité au stock">
                                    <img src="media/images/bouton_moins.png" alt="bouton plus">
                                </button>
                            </form>
                            <p><?php echo ($bonbons["nom"]); ?></p>
                            <form method="POST" action="update_stock.php">
                                <input type="hidden" name="action" value="increase">
                                <input type="hidden" name="boutique_id" value="<?php echo $idshop; ?>">
                                <button type="submit" alt="Ajouter une unité au stock">
                                    <img src="media/images/bouton_plus.png" alt="bouton plus">
                                </button>
                            </form>
                        </div>

                        <div class="price">
                            <p>Prix : <?php echo ($bonbons["prix"]); ?> €</p>
                            <?php
                            ?>
                            <p>Quantité : <?php echo ($stockvar["quantite"]) ?> </p>
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