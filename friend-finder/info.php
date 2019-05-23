<?php
include "bdd.inc.php";

$id=$_SESSION['id'];
///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      include "class_utilisateur.php";
      $unutilisateur = new utilisateur ($id,'','','','','','','','','','','','');
      $unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn);

      $nom=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['nom_utilisateur'];
      $prenom=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['prenom_utilisateur'];
      $mail=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['email_utilisateur'];
      $tel=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['tel_utilisateur'];
      $rue=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['rue_utilisateur'];
      $ville=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['ville_utilisateur'];
      $cp=$unutilisateur -> affiche_utilisateur_total($unutilisateur, $conn)['cp_utilisateur'];
    }
///////////////////////////////////////////////////////////////////////////////
/*												E N T R E P R I S E																*/
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="entreprise")
    {
      include "class_entreprise.php";
      $uneentreprise = new entreprise ($id,'','','','','','','','','','','','');
      $uneentreprise -> affiche_entreprise($uneentreprise, $conn);

      $entreprise=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['nom_entreprise'];
  		$nom=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['nom_responsable'];
  		$prenom=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['prenom_responsable'];
  		$mail=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['mail_entreprise'];
  		$rue=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['rue_entreprise'];
  		$ville=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['ville_entreprise'];
  		$cp=$uneentreprise -> affiche_entreprise($uneentreprise, $conn)['cp_entreprise'];
    }
?>
