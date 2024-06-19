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

// Vérifier si l'utilisateur peut être authentifier
$resultat = check_login($user, $mdp);

//Récupérer le role de l'utilisateur

if ($resultat == true){
    $role = requete("SELECT role FROM utilisateurs WHERE username = $user");
    foreach($role as $rolevar){
        if ($rolevar == "admin") {
            header("Location: indexadmin.php");
            exit();
        } elseif ($rolevar == "gerant") {
            header("Location: index.php"); 
            exit();
        } else { 
            header("Location: index.php");
            exit();
        }
    }
    } else {
        $_SESSION["error"] = "Rôle non trouvé.";
        header("Location: login.php");
        exit();
    }

