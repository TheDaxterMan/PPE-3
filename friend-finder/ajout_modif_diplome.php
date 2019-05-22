<?php
session_start();
require_once('login.inc.php');
include "bdd.inc.php";
include "class_diplome.php";
include "login.inc.php";


if (isset($_POST['enregistrerd']))
{
  $nom_diplome=$_POST['diplome'];
  $lib_diplome=$_POST['lib'];

  $undiplome = new diplome (NULL,$nom_diplome,$lib_diplome,'0');
  $undiplome -> ajout_diplome($undiplome, $conn);

  header('Location: ./modif_diplome.php');
}
if (isset($_POST['modifierd']))
{

  $id_diplome=$_POST['id_diplome'];
  $nom_diplome=$_POST['nom_diplome'];
  $lib_diplome=$_POST['lib_diplome'];

  $undiplome = new diplome ($id_diplome,$nom_diplome,$lib_diplome,'0');
  $undiplome -> modif_diplome($undiplome, $conn);
  /*$sql="UPDATE diplome SET nom_diplome = '$nom_diplome',
                                lib_diplome = '$lib_diplome'
                                 WHERE id_diplome = $id_diplome";

  $req = $conn -> prepare($sql)or die($conn->errorInfo());
  $req -> execute();*/
  header('Location: ./modif_diplome.php');
}
?>
