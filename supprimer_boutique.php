<?php
include_once("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['boutique_id'])) {
    $boutique_id = intval($_POST['boutique_id']); /*le intval correspond à quoi ? */

    $supp = requete("DELETE FROM boutiques WHERE id = $boutique_id");

    if ($supp) { // Vérifie si la requête a été exécutée avec succès
        $_SESSION['message'] = "La boutique a été supprimée avec succès.";
    } else {
        $_SESSION['message'] = "Erreur lors de la suppression de la boutique.";
    }

    header("Location: indexadmin.php");
    exit();
} else {
    $_SESSION['message'] = "Requête invalide.";
    header("Location: indexadmin.php");
    exit();
}
