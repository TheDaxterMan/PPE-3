<?php

$host="localhost";
$dbname="viabahuet";
$user="root";
$password="";

//PDO = classe

try {
  $conn=new PDO ("mysql:host=".$host.";dbname=".$dbname,$user,$password);
  $conn -> exec ('SET NAMES utf8');
} catch (Exception $e) {
    die ('erreur'.$e ->getMessage());
}


?>
