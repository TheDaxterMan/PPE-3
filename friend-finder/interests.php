<?php
session_start();
include "bdd.inc.php";
include "class_interet.php";

if ($_POST['interet']==NULL)
{
  echo"<script language=\"javascript\">";
  echo"alert('PD')";
  echo"</script>";
  header('Refresh: 0; URL=./edit-profile-interests.php');
}
else
{
  $id_int=$_POST['interet'];
  $id_utilisateur=$_SESSION['id'];

  $uninteret = new interet ($id_int,$id_utilisateur);
  $uninteret -> ajout_interet($uninteret, $conn);

  header('Refresh: 0; URL=./edit-profile-interests.php');
}
?>
