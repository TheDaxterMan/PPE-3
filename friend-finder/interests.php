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
  $sql="INSERT INTO interesse
        VALUES ('$id_int', '$id_utilisateur')";

  $req = $conn -> query($sql)or die($conn->errorInfo());
  $res = $req->fetch();
  
  $uninteret = new interet (NULL, '$id_int','$lib_int','img_int', 0,'id_utilisateur');
  
  $uninteret -> ajout_interet ($uninteret, $conn);

  header('Refresh: 0; URL=./edit-profile-interests.php');
}
?>
