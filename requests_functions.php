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
























//  } catch (Exception $ex) {
//  echo $ex->getMessage();
//  }
