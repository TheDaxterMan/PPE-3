<?php
session_start();
require_once('login.inc.php');
include "bdd.inc.php";
include "login.inc.php";


if (isset($_POST['enregistrerf']))
{
  $lib_filiere=$_POST['filiere'];

  $sql="INSERT INTO filiere VALUES (NULL,'$lib_filiere','0')";

  $req = $conn -> prepare($sql)or die($conn->errorInfo());
  $req -> execute();
  header('Location: ./modif_filiere.php');
}
if (isset($_POST['modifierf']))
{
  $id_filiere=$_POST['id_filiere'];
  $lib_filiere=$_POST['lib_filiere'];

  $sql="UPDATE filiere SET lib_filiere = '$lib_filiere'
                                 WHERE id_filiere = $id_filiere";

  $req = $conn -> prepare($sql)or die($conn->errorInfo());
  $req -> execute();
  header('Location: ./modif_filiere.php');
}
?>
