<?php
include_once("requests_functions.php");
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="fr">

<!--Groupe 8 Samuel PERSON et Léo LE LOCAT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Confiz</title>
    
    <link rel="stylesheet" href="Catalogue.html">
    <link rel="stylesheet" href="Produit.html">
    <link rel="stylesheet" href="Layout.css">

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
            <!-- FORMULAIRE -->   
        </div>
    </nav>
    
    <main>

<!--     php
    $user = $_POST["username"];
    take_name($user);
    test
    ?  -->

        <div class="Type_shop">
            <h1>Choisissez votre boutique </h1>
        </div>

            <section>
                <article>
                    <a href="" class="img_bas"><img src="media/images/shop1.png" alt="Logo_boutique_ville1"></a>
                    <h2>Aubergenville</h2>
                </article>

                <article>
                    <a href=""class="img_haut"><img src="media/images/shop2.png" alt="Logo_boutique_ville2"></a>
                    <h2>Roubaix</h2>
                </article>

                <div class="main-container">
    <br>
    <p>

                <article>
                    <a href="" class="img_bas" ><img src="media/images/shop3.png" alt="Logo_boutique_ville3"></a>
                    <h2>Nice</h2>
                </article>

            </section>
        
            <div class="confiz"><img src="media/images/confiz.png" alt="Logo_confiz"></div>

        <footer>   
            
            <div class="foot_left">
                <p>Réalisé par Samuel PERSON et Léo LE LOCAT</p>
            </div>

            <div class="foot_right">
                <a href="https://www.haribo.com/fr-fr"><img src="media/images/haribo.png" alt="Logo_Haribo"></a>
            </div>
        
        </footer>
    </main>
</body>
</html>