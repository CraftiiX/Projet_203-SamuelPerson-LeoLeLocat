<?php
    include_once ("db.php");
    /*
     * Constante à modifier en fonction de votre chemin.
     * Si vous lancer votre serveur à partir du dossier
     * l'adresse sera probablement "http://localhost:8080"
     */
    const MON_URL_SERVER = "http://127.0.0.1";
    session_start();
?>

<!DOCTYPE html>
<html lang="" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="<?=MON_URL_SERVER ?>/css/styles.css" rel="stylesheet">
    <link href="<?=MON_URL_SERVER ?>/css/colors.css" rel="stylesheet">

    <script src="<?=MON_URL_SERVER ?>/js/jquery-3.4.1.slim.min.js" ></script>
    <script src="<?=MON_URL_SERVER ?>/js/popper.min.js"></script>
    <script src="<?=MON_URL_SERVER ?>/js/bootstrap.min.js" ></script>
</head>

<body>