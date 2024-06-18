<?php
include_once ("header.php");
?>

<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit</title>
    <!-- <link rel="stylesheet" href="layout.css"> -->
    <link rel="stylesheet" href="produit.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <nav>
        <div class="menu">

        <div class="Accueil">
                <p>Accueil</p>
            </div>

            <!--    PHP A COMPLETER 
                BARRE DE RECHERCHE   -->

            <div class="Catalogue">
                <p>Catalogue</p>
            </div>

        </div>
    </nav>

    <main>
        <div class="retour">
            <p>Retour</p>
        </div>
        
        <section class="produit">

        <?php 
            $id = $_GET["productid"];
            $produit = requete("select * from confiseries where id=$id");
            foreach ($produit as $var)
        ?>
            
            <div class="price">
                <img src="media/images/<?php echo($var["id"])?>" alt="">
                <p>6€</p>
            </div>

            <article class="infos">
                <h1><?php echo($var["nom"])?></h1>
                <h2><?php echo($var["prix"])?></h2>
                <p><?php echo($var["description"])?></p>
                <button>Ajouter au panier</button>
            </article>
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