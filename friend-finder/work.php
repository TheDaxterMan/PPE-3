<?php
session_start();
include "bdd.inc.php";

  $id=$_SESSION['id'];
  $diplome=$_POST['diplome'];
  $annee=$_POST['annee'];

  $sql="INSERT INTO possede VALUES ('$id','$diplome','$annee')";
  $req = $conn -> query($sql)or die($conn->errorInfo());
  $res=$req->fetch();
?>
