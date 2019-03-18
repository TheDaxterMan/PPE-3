<?php
include "bdd.inc.php";
include "class_utilisateur.php";
include"class_entreprise.php";

$id=$_SESSION['id'];
///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      $nom=$res['nom_utilisateur'];
      $prenom=$res['prenom_utilisateur'];
      $mail=$res['email_utilisateur'];
      $tel=$res['tel_utilisateur'];
      $rue=$res['rue_utilisateur'];
      $ville=$res['ville_utilisateur'];
      $cp=$res['cp_utilisateur'];
        
         $unutil = new utilisateur ('','','','','','','','','','','','');
           
        $unutil -> affiche_utilisateur_total($unutil, $conn);
    }
///////////////////////////////////////////////////////////////////////////////
/*												E N T R E P R I S E																*/
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="entreprise")
    {
        $entreprise=$res['nom_entreprise'];
  		$nom=$res['nom_responsable'];
  		$prenom=$res['prenom_responsable'];
  		$mail=$res['mail_entreprise'];
  		$rue=$res['rue_entreprise'];
  		$ville=$res['ville_entreprise'];
  		$cp=$res['cp_entreprise'];
        
        
        $uneent = new utilisateur ('','','','','','','','','','','','');
           
        $uneent -> affiche_entreprise($uneent, $conn);
    }
?>
