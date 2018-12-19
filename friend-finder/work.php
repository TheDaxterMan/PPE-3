<?php
session_start();
include "bdd.inc.php";

  $id=$_SESSION['id'];
  $diplome=$_POST['diplome'];
  $annee=$_POST['annee'];

  $sql="INSERT INTO possede VALUES ('$id','$diplome','$annee')";
  $req=$conn->prepare($sql)or die($conn->errorInfo());
  $req -> execute();
  $res=$req->fetch();
  header('Location: ./edit-profile-work-edu.php');
?>
