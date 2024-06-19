<?php
include_once ("header.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'increase') {
    $idshop = $_POST['boutique_id'];

    $idshop = intval($idshop);

    $query = "UPDATE stocks SET quantite = quantite - 1 WHERE boutique_id = :idshop";

    $stmt = $PDO->prepare($query);
    $stmt->bindParam(':idshop', $idshop, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: {$_SERVER['HTTP_REFERER']}");        exit;
    } else {
        echo "Erreur lors de la mise à jour.";
    }
}
