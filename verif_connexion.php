<?php
include_once ("header.php");


function check_login($username, $password)
{
 global $PDO;
 $sql = "SELECT id, password, role FROM utilisateurs WHERE username = '" . $username . "'";
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

// Récupérer les valeurs du formulaire
$user = $_POST["username"];
$mdp = $_POST["mdp"];

// Vérifier si l'utilisateur peut être authentifier
$resultat = check_login($user, $mdp);

if ($resultat == true){
    $_SESSION["username"] = $user;
    $_SESSION["loggedin"] = true;
    exit();
    //if/else dans le if ?
    if ($role = 'admin'){
        header("Location: index_admin.php");
    }
    else{
        header("Location: index.php");
    }
}
else{
    $_SESSION["error"] = "Mauvais login / mot de passe";
 header("Location: login.php");
    exit();
}
?>
