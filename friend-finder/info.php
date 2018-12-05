<?php
include "bdd.inc.php";
$id=$_SESSION['id'];
///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      $sql="SELECT * FROM utilisateur
            WHERE id_utilisateur=$id";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      $nom=$res['nom_utilisateur'];
      $prenom=$res['prenom_utilisateur'];
      $mail=$res['email_utilisateur'];
      $tel=$res['tel_utilisateur'];
      $rue=$res['rue_utilisateur'];
      $ville=$res['ville_utilisateur'];
      $cp=$res['cp_utilisateur'];
    }
///////////////////////////////////////////////////////////////////////////////
/*												E N T R E P R I S E																*/
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="entreprise")
    {
      $sql="SELECT * FROM entreprise
            WHERE id_entreprise=$id";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      $entreprise=$res['nom_entreprise'];
  		$nom=$res['nom_responsable'];
  		$prenom=$res['prenom_responsable'];
  		$mail=$res['mail_entreprise'];
  		$rue=$res['rue_entreprise'];
  		$ville=$res['ville_entreprise'];
  		$cp=$res['cp_entreprise'];
    }
?>
