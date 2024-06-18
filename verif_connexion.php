<?php
include_once ("header.php");


function check_login($username, $password)
{
 global $PDO;
 $sql = "SELECT id, password FROM utilisateurs WHERE username = '" . $username . "'";
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

//Récupérer le role de l'utilisateur
//$role = requete("select role from utilisateurs where username=$user");


// Vérifier si l'utilisateur peut être authentifier
$resultat = check_login($user, $mdp);

if ($resultat == true){
    $_SESSION["username"] = $user;
    $_SESSION["loggedin"] = true;
    //if ($role="admin"){
       // header("Location: indexadmin.php");
       // exit();
    //}
    //rajouter un elseif pour les gérants une fois que
    //j'aurais fait le lien entre boutiques et catalogue
   // else{
        header("Location: index.php");
        exit();
   // }
}
else{
    $_SESSION["error"] = "Mauvais login / mot de passe";
 header("Location: login.php");
    exit();
}

