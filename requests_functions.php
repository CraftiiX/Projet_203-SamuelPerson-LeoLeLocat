<?php
include_once ("header.php");

//$user = $_POST["username"];

//test
function take_name($user){
 global $PDO;
 $sql = "SELECT nom, prenom FROM utilisateurs WHERE username = '" . $user . "'";
 $results = array();

 $stmt = $PDO->prepare($sql);
 $stmt->execute();
 $results = $stmt->fetchall();
 echo ($results[0]["prenom"]);
}

function getUserRole($username){
    global $PDO;
    $sql = "SELECT role FROM utilisateurs WHERE username = '" . $username . "'";
    $results = array();   
}

//fonction Léo pr dire bjour
$username = $_POST['username'];  
$role = getUserRole($username);

if ($role == 'admin') {
    echo SalutAdmin();
} elseif ($role == 'gerant') {
    echo SalutGerant();
} else {
    echo SalutClient();
}

function SalutAdmin() {
    return "<h1>Bonjour admin !</h1>";
}

function SalutGerant() {
    return "<h1>Bonjour gérant !</h1>";
}

function SalutClient() {
    return "<h1>Bonjour client !</h1>";
}
?>


















//  } catch (Exception $ex) {
//  echo $ex->getMessage();
//  }
