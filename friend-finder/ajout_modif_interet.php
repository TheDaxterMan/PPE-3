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

  $uninteret = new interet (NULL,'$lib_interet','$img_interet',0);
  
  $uninteret -> ajout_interet($uninteret, $conn);
  
  header('Location: ./modif_interet.php');
}
if (isset($_POST['modifieri']))
{
  $id_interet=$_POST['id_interet'];
  $lib_interet=$_POST['lib_interet'];
  $img_interet=$_POST['img'];
  
   $autreinteret = ('','','','');
  
  $autreinteret -> modif_interet($autreinteret, $conn);
  
  header('Location: ./modif_interet.php');
}
?>
