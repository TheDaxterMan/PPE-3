<?php
session_start();
include "bdd.inc.php";


$id_int=$_POST['interet'];
$id_utilisateur=$_SESSION['id'];
$sql="INSERT INTO interesse
      VALUES ('$id_int', '$id_utilisateur')";

$req = $conn -> query($sql)or die($conn->errorInfo());
$res = $req->fetch();

/* header('Refresh: 1; URL=./edit-profile-interests.php'); */
?>
