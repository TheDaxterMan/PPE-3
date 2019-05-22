<?php
session_start();
require_once('login.inc.php');
include "bdd.inc.php";
include "login.inc.php";
include "class_filiere.php";


if (isset($_POST['enregistrerf']))
{
  $lib_filiere=$_POST['filiere'];

  $unefiliere = new filiere (NULL,$lib_filiere,'0');
  $unefiliere -> ajout_filiere($unefiliere, $conn);

  header('Location: ./modif_filiere.php');
}
if (isset($_POST['modifierf']))
{
  $id_filiere=$_POST['id_filiere'];
  $lib_filiere=$_POST['lib_filiere'];

  $unefiliere = new filiere ($id_filiere,$lib_filiere,'');
  $unefiliere -> modif_filiere($unefiliere, $conn);

  header('Location: ./modif_filiere.php');
}
if (isset($_POST['suppr']))
{

  $id_filiere=$_POST['id_filiere'];

  $unefiliere = new filiere ($id_filiere,'','','');
  $unefiliere -> suppr_filiere($unefiliere, $conn);

  header('Location: ./modif_filiere.php');
}
?>
