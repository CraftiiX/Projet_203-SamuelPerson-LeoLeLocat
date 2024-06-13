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
            
            <article>
                <a href="produit.html"><img src="media/images/tagadared.png" alt="Sachet de tagada rouges"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>
                    
                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/ours_or.png" alt="Sachet d'ours d'or"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/tagadared.png" alt="Sachet de tagada rouges"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/ours_or.png" alt="Sachet d'ours d'or"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/tagadared.png" alt="Sachet de tagada rouges"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/ours_or.png" alt="Sachet d'ours d'or"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/tagadared.png" alt="Sachet de tagada rouges"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>

                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
            </article>

            <article>
                <a href="catalogue.html"><img src="media/images/ours_or.png" alt="Sachet d'ours d'or"></a>
                <div class="button_quantite">
                    <p>Tagada rouges haribo</p>
                    <button alt="Retirer une unité du stock">
                        <img src="media/images/bouton_moins.png" alt="bouton moins">
                    </button>

                    <button alt="Ajouter une unité au stock">
                        <img src="media/images/bouton_plus.png" alt="bouton plus">
                    </button>
                </div>
                
                <div class="price">
                    <p>6€</p>
                    <p>Quantité : </p>
                </div>
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