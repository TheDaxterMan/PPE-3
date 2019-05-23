<?php
session_start();
require_once('login.inc.php');
include "bdd.inc.php";
include "login.inc.php";
include "class_centres_interets.php";

if (isset($_POST['enregistreri']))
{
  $lib_interet=$_POST['interet'];
  $img_interet=$_POST['img'];

  $uneinteret = new interet (NULL,$lib_interet,$img_interet,'0');
  $uneinteret -> ajout_interet($uneinteret, $conn);


  header('Location: ./modif_interet.php');
}
if (isset($_POST['modifieri']))
{
  $id_interet=$_POST['id_interet'];
  $lib_interet=$_POST['lib_interet'];
  $img_interet=$_POST['img'];

  $uneinteret = new interet ($id_interet,$lib_interet,$img_interet,'');
  $uneinteret -> modif_interet($uneinteret, $conn);

  $req = $conn -> prepare($sql)or die($conn->errorInfo());
  $req -> execute();
  header('Location: ./modif_interet.php');
}
if (isset($_POST['suppr']))
{

  $id_interet=$_POST['id_interet'];

  $uneinteret = new interet ($id_interet,'','','');
  $uneinteret -> suppr_interet($uneinteret, $conn);

  header('Location: ./modif_interet.php');
}
?>
