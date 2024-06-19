<?php
include_once ("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'increase') {
    $idshop = $_POST['boutique_id'];

    $idshop = intval($idshop);

    $query = "UPDATE stocks SET quantite = quantite + 1 WHERE boutique_id = :idshop";

    $stmt = $PDO->prepare($query);
    $stmt->bindParam(':idshop', $idshop, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: {$_SERVER['HTTP_REFERER']}");        exit;
    } else {
        echo "Erreur";
    }
            /* header("Location: {$_SERVER['HTTP_REFERER']}?success=1"); ça j'ai pas tout compris je l'ai trouvé sur openclassrooms, mais en gros 
        c'est pour éviter le +2 quand on appuie sur le bouton et le +1 quand on actualise la page, à utiliser sur le bouton 
        } else {
        echo "Erreur lors de la mise à jour.";
    } */
}
