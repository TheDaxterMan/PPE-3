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
  $today = date("Y-n-j");

  ///////////////////////////////////////////////////////////////////////////////
  /*									        	E L E V E																			 */
  ///////////////////////////////////////////////////////////////////////////////
      if ($_SESSION['profil']=="eleve")
      {
        if ($radio=="stage")
        {
          $dated=$_POST['dated'];
          $datef=$_POST['datef'];
          $unstageutil = new stage (NULL, $lib, $desc, $dated, $datef, 'comm', '1', $id, $filiere);
          $unstageutil -> ajout_stage_util($unstageutil, $conn);
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $unemploiutil = new emploi (NULL, $lib, $desc, $today, '1', $id, $filiere);
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
          $unstageent = new stage (NULL, $lib, $desc, $dated, $datef, 'comm', $id, '1', $filiere);
          $unstageent -> ajout_stage_ent($unstageent, $conn);
          header('Location: ./newsfeed.php');
        }
        else
        {
          if ($radio=="emploi")
          {
            $unemploient = new emploi (NULL, $lib, $desc, $today, $id, '1', $filiere);
            $unemploient -> ajout_emploi_ent($unemploient, $conn);
            header('Location: ./newsfeed.php');
          }
        }
      }

?>
