<?php
session_start();
include "bdd.inc.php";

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
        $sql = "UPDATE utilisateur SET nom_utilisateur = '$nom',
                                       prenom_utilisateur = '$prenom',
                                       tel_utilisateur = '$tel',
                                       email_utilisateur = '$mail',
                                       rue_utilisateur = '$rue',
                                       ville_utilisateur = '$ville',
                                       cp_utilisateur = '$cp',
                                       id_filiere = '$filiere'
                                       WHERE id_utilisateur = $iduti";
      }
  ///////////////////////////////////////////////////////////////////////////////
  /*												E N T R E P R I S E																*/
  ///////////////////////////////////////////////////////////////////////////////
      if ($choix=="entreprise")
      {
        $entreprise = $_POST['entr'];
        $sql = "UPDATE entreprise SET  nom_entreprise = '$entreprise',
                                       nom_responsable = '$nom',
                                       prenom_responsable = '$prenom',
                                       mail_entreprise = '$mail',
                                       rue_entreprise = '$rue',
                                       ville_entreprise = '$ville',
                                       cp_entreprise = '$cp'
                                       WHERE id_entreprise = $iduti";
      }


  $req = $conn -> prepare($sql);
  $req -> execute();

  header('Location: ./modif_utilisateur.php');
?>
