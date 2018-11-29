<?php
include "bdd.inc.php";

  $id=$_SESSION['id'];
  $radio=$_POST['prop'];
  $filiere=$_POST['filiere'];
  $lib=$_POST['lib'];
  $desc=$_POST['desc'];

if ($radio=="stage")
{
  $dated=$_POST['dated'];
  $datef=$_POST['datef'];
  $sql= "INSERT INTO stage VALUES (NULL,'$lib','$desc','$date','','$id','','$filiere')";
  $req = $conn -> query($sql)or die($conn->errorInfo());
  $req -> execute();
  header('Location: ./newsfeed.php');
}
else
{
  if ($radio=="emploi")
  {
    $sql= "INSERT INTO emploi VALUES (NULL,'$lib','$desc','$date','','$id','','$filiere')";
    $req = $conn -> query($sql)or die($conn->errorInfo());
    $req -> execute();
    header('Location: ./newsfeed.php');
  }
}

?>
