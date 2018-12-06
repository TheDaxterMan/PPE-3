<?php
session_start();
include "bdd.inc.php";

  $id=$_SESSION['id'];
  $radio=$_POST['prop'];
  $filiere=$_POST['filiere'];
  $lib=$_POST['lib'];
  $desc=$_POST['desc'];

  ///////////////////////////////////////////////////////////////////////////////
  /*									        	E L E V E																			 */
  ///////////////////////////////////////////////////////////////////////////////
      if ($_SESSION['profil']=="eleve")
      {
        if ($radio=="stage")
        {
          $dated=$_POST['dated'];
          $datef=$_POST['datef'];
          $sql= "INSERT INTO stage VALUES (NULL,'$lib','$desc','$dated','$datef','','1','$id','$filiere')";
          $req = $conn -> query($sql)or die($conn->errorInfo());
          $res=$req->fetch();
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $sql= "INSERT INTO emploi VALUES (NULL,'$lib','$desc','1','$id','$filiere')";
            $req = $conn -> query($sql)or die($conn->errorInfo());
            $res=$req->fetch();
            header('Location: ./newsfeed.php');
          }
        }
      }
  ///////////////////////////////////////////////////////////////////////////////
  /*												E N T R E P R I S E																*/
  ///////////////////////////////////////////////////////////////////////////////
      if ($_SESSION['profil']=="entreprise")
      {
        if ($radio=="stage")
        {
          $dated=$_POST['dated'];
          $datef=$_POST['datef'];
          $sql= "INSERT INTO stage VALUES (NULL,'$lib','$desc','$dated','$datef','','$id','1','$filiere')";
          $req = $conn -> query($sql)or die($conn->errorInfo());
        	$res=$req->fetch();
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $sql= "INSERT INTO emploi VALUES (NULL,'$lib','$desc','$id','1','$filiere')";
            $req = $conn -> query($sql)or die($conn->errorInfo());
            $res=$req->fetch();
            header('Location: ./newsfeed.php');
          }
        }
      }
?>
