<?php
session_start();
include "bdd.inc.php";

  $id=$_SESSION['id'];
  $diplome=$_POST['diplome'];
  $annee=$_POST['annee'];

  echo $id,' ',$diplome,' ',$annee;
?>
