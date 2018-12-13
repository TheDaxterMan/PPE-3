<?php
session_start();
include "bdd.inc.php";
include "class_stage.php";
include "class_emploi.php";

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
          $unstageutil = new stage (NULL, $lib, $desc, $dated, $datef, 'comm', NULL, $id, $filiere);
          $unstageutil -> ajout_stage_util($unstageutil, $conn);
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $unemploiutil = new emploi (NULL, $lib, $desc, NULL, $id);
            $unemploiutil -> ajout_emploi_util($unemploiutil, $conn);
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
          $unstageent = new stage (NULL, $lib, $desc, $dated, $datef, 'comm', $id, NULL, $filiere);
          $unstageent -> ajout_stage_ent($unstageent, $conn);
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $unemploient = new emploi (NULL, $lib, $desc, $id, NULL);
            $unemploient -> ajout_emploi_ent($unemploient, $conn);
            header('Location: ./newsfeed.php');
          }
        }
      }



/*
            $sql= "INSERT INTO stage VALUES (NULL,'$lib','$desc','$dated','$datef','','1','$id','$filiere')";
            $sql= "INSERT INTO emploi VALUES (NULL,'$lib','$desc','1','$id','$filiere')";
            $req = $conn -> query($sql)or die($conn->errorInfo());
            $res=$req->fetch();

*/
?>
