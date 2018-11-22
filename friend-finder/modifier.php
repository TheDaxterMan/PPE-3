<?php
include "bdd.inc.php";
  $iduti= $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $tel = $_POST['tel'];
  $mail = $_POST['mail'];
  $rue = $_POST['rue'];
  $ville = $_POST['ville'];
  $cp = $_POST['cp'];


  $sql = "UPDATE utilisateur SET nom_utilisateur = '$nom',
                                 prenom_utilisateur = '$prenom',
                                 tel_utilisateur = '$tel',
                                 email_utilisateur = '$mail',
                                 rue_utilisateur = '$rue',
                                 ville_utilisateur = '$ville',
                                 cp_utilisateur = '$cp'
                                 WHERE id_utilisateur = $iduti";
  $req = $conn -> prepare($sql);
  $req -> execute();

  header('Location: ./edit-profile-basic.php');
?>
