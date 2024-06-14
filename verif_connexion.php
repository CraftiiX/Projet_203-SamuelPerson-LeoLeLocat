<?php
include_once ("header.php");
include_on


function check_login($username, $password)
{
 global $PDO;
 $sql = "SELECT id, password, FROM utilisateurs WHERE username = '" . $username . "'";
 $results = array();

 try {
 $stmt = $PDO->prepare($sql);
 $stmt->execute();
 $results = $stmt->fetchall();

 var_dump($results);
 if (count($results)) {
 if ($results[0]["password"] == md5($password))
 return $results[0]['id'];
 else
 return 0;
 }

 } catch (Exception $ex) {
 echo $ex->getMessage();
 }
}

//fonction Léo pr dire bjour
$username = $_POST['username'];  
$role = getUserRole($username);

function getUserRole($username){
    global $PDO;
    $sql = "SELECT role FROM utilisateurs WHERE username = '" . $username . "'";
    $results = array();   

    try {
        $stmt = $PDO->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchall();
    }
}

if ($role == 'admin') {
    echo SalutAdmin();
} elseif ($role == 'gerant') {
    echo SalutGerant();
} else {
    echo SalutClient();
}

// Récupérer les valeurs du formulaire
$user = $_POST["username"];
$mdp = $_POST["mdp"];

// Vérifier si l'utilisateur peut être authentifier
$resultat = check_login($user, $mdp);

if ($resultat == true){
    $_SESSION["username"] = $user;
    $_SESSION["loggedin"] = true;
    //if/else dans le if ?
        
}
else{
    $_SESSION["error"] = "Mauvais login / mot de passe";
 header("Location: login.php");
    exit();
}
?>
