<?php
session_start();
include "bdd.inc.php";
include "class_utilisateur.php";
include "class_entreprise.php";

  $choix= $_SESSION['choix'];
  $iduti= $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $rue = $_POST['rue'];
  $ville = $_POST['ville'];
  $cp = $_POST['cp'];
  ///////////////////////////////////////////////////////////////////////////////
  /*									        	E L E V E																			 */
  ///////////////////////////////////////////////////////////////////////////////
      if ($choix=="utilisateur")
      {
        $filiere = $_POST['choix_filiere'];
        $tel = $_POST['tel'];
        
        $unutil = new utilisateur ('','','','','','','','','','','','');
        
        $unutil -> affiche_utilisateur_partiel ($unuil, $conn);
        
      }
  ///////////////////////////////////////////////////////////////////////////////
  /*												E N T R E P R I S E																*/
  ///////////////////////////////////////////////////////////////////////////////
      if ($choix=="entreprise")
      {
        $entreprise = $_POST['entr'];
        
        $unent = new entreprise ('','','','','','','','','','','','');
        
        $unent -> affiche_utilisateur_partiel ($unent, $conn);
        
      }


  $req = $conn -> prepare($sql);
  $req -> execute();

  header('Location: ./modif_utilisateur.php');
?>
