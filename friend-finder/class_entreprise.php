<?php

include 'bdd.inc.php';
/*include 'activite_entreprise.php';*/

	/* ---------------------- */
	/* DEBUT class Entreprise */
	/* ---------------------- */

class entreprise
{

		/* ---------------------- */
		/* class Entreprise Variables */
		/* ---------------------- */

		Private $id_entreprise;
		Private $nom_entreprise;
		Private $nom_responsable;
		Private $prenom_responsable;
		Private $mail_entreprise;
		Private $rue_entreprise;
		Private $ville_entreprise;
		Private $cp_entreprise;
		Private $photo_entreprise;
		Private $login_entreprise;
		Private $mdp_entreprise;
		Private $etat_entreprise;

		/* ---------------------- */
		/* class Entreprise Constructeur */
		/* ---------------------- */

			Public function entreprise ( $id_ent, $nom_ent, $nom_resp, $prenom_resp, $mail_ent, $rue_ent, $ville_ent, $cp_ent, $photo_ent, $login_ent, $mdp_ent, $etat_ent)
			{
				$this -> id_entreprise = $id_ent;
				$this -> nom_entreprise = $nom_ent;
				$this -> nom_responsable = $nom_resp;
				$this -> prenom_responsable = $prenom_resp;
				$this -> mail_entreprise = $mail_ent;
				$this -> rue_entreprise = $rue_ent;
				$this -> ville_entreprise = $ville_ent;
				$this -> cp_entreprise = $cp_ent;
				$this -> photo_entreprise = $photo_ent;
				$this -> login_entreprise = $login_ent;
				$this -> mdp_entreprise = $mdp_ent;
				$this -> etat_entreprise = $etat_ent;
			}

			/* ---------------------- */
			/* fonction Entreprise getalldata */
			/* ---------------------- */

			public function getallent()
			{
				$data = $this->$id_entreprise;
				$data = $data.$this->$nom_entreprise;
				$data = $data.$this->$nom_responsable;
				$data = $data.$this->$prenom_responsable;
				$data = $data.$this->$mail_entreprise;
				$data = $data.$this->$rue_entreprise;
				$data = $data.$this->$ville_entreprise;
				$data = $data.$this->$cp_entreprise;
				$data = $date.$this->$photo_entreprise;
				$data = $data.$this->$login_entreprise;
				$data = $data.$this->$mdp_entreprise;
				$data = $data.$this->$etat_entreprise;
				return $data;
			}

			/* ---------------------- */
			/* class Entreprise GET */
			/* ---------------------- */

			Public function get_id_entreprise ()
			{
				return $this-> id_entreprise;
			}

			Public function get_nom_entreprise ()
			{
				return $this-> nom_entreprise;
			}

			Public function get_nom_responsable ()
			{
				return $this-> nom_responsable;
			}

			Public function  get_prenom_responsable ()
			{
				return $this-> prenom_responsable;
			}

			Public function  get_mail_entreprise ()
			{
				return $this-> mail_entreprise;
			}

			Public function  get_rue_entreprise ()
			{
				return $this-> rue_entreprise;
			}

			Public function  get_ville_entreprise ()
			{
				return $this-> ville_entreprise;
			}

			Public function  get_cp_entreprise ()
			{
				return $this-> cp_entreprise;
			}

			Public function  get_photo_entreprise ()
			{
				return $this-> photo_entreprise;
			}

			Public function  get_login_entreprise ()
			{
				return $this-> login_entreprise;
			}

			Public function  get_mdp_entreprise ()
			{
				return $this-> mdp_entreprise;
			}

			Public function  get_etat_entreprise ()
			{
				return $this-> etat_entreprise;
			}

			/* ---------------------- */
			/* class Entreprise SET */
			/* ---------------------- */

			Public function set_nom_entreprise ($nom_ent)
			{
				 $this-> nom_entreprise = $nom_ent;
			}

			Public function set_nom_responsable ($nom_resp)
			{
				 $this-> nom_responsable = $nom_resp;
			}

			Public function set_prenom_responsable ($prenom_resp)
			{
				 $this-> prenom_responsable = $prenom_resp;
			}

			Public function set_mail_entreprise ($mail_ent)
			{
				 $this-> mail_entreprise = $mail_ent;
			}

			Public function set_rue_entreprise ($rue_ent)
			{
				 $this-> rue_entreprise = $rue_ent;
			}

			Public function set_ville_entreprise ($ville_ent)
			{
				 $this-> ville_entreprise = $ville_ent;
			}

			Public function set_cp_entreprise ($cp_ent)
			{
				 $this-> cp_entreprise = $cp_ent;
			}

			Public function set_photo_entreprise ($photo_ent)
			{
				 $this-> photo_entreprise = $photo_ent;
			}

			Public function set_login_entreprise ($login_ent)
			{
				 $this-> login_entreprise = $login_ent;
			}

			Public function set_mdp_entreprise($mdp_ent)
			{
				 $this-> mdp_entreprise = $mdp_ent;
			}

			Public function set_etat_ent($etat_ent)
			{
				 $this-> etat_entreprise = $etat_ent;
			}

			/* ---------------------- */
			/* class Entreprise fonctions publiques */
			/* ---------------------- */
			Public function ajout_entreprise ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					print $SQL = " INSERT INTO entreprise values (NULL, '$nom_ent', '$nom_resp', '$prenom_resp', '$mail_ent', '$rue_ent', '$ville_ent', '$cp_ent', '$photo_ent', '$login_ent', '$mdp_ent', '0','1')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout entreprise ');
				}
				Public function modif_entreprise ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					print $SQL = "UPDATE entreprise SET nom_entreprise = '$nom_ent', nom_responsable  = '$nom_resp',
					prenom_responsable = '$prenom_resp', mail_entreprise = '$mail_ent', rue_entreprise = '$rue_ent', ville_entreprise = '$ville_ent',
					cp_entreprise = '$cp_ent', photo_entreprise = '$photo_ent', mdp_entreprise = '$mdp_ent' WHERE id_entreprise = '$id_ent'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification entreprise ');
				}
	
				Public function modif_entreprise_partiel ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();					
					print $SQL = "UPDATE entreprise SET  nom_entreprise = '$entreprise',nom_responsable = '$nom',
					prenom_responsable = '$prenom', mail_entreprise = '$mail', rue_entreprise = '$rue', 
					ville_entreprise = '$ville', cp_entreprise = '$cp' WHERE id_entreprise = '$id_ent'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification entreprise ');
				}
				Public function affiche_entreprise ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					print $SQL = " SELECT *  From entreprise WHERE id_entreprise = '$id_ent'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage entreprise ');
					Return $Res = $Req -> fetch ();
				}
	
				Public function affiche_entreprise_login ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					print $SQL = " SELECT *  From entreprise WHERE id_entreprise = '$id_ent' AND mdp_entreprise = '$mdp_ent'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage entreprise ');
					Return $Res = $Req -> fetch ();
				}
				Public function suppr_entreprise ($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					print $SQL = " DELETE FROM entreprise WHERE id_entreprise  = '$id_ent'";
					$Req = $conn -> query ($SQL) or die (' Erreur suppression entreprise ');
				}
	
				Public function suppr_fictive_ent($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					
					print $SQL = "UPDATE entreprise SET etat_entreprise=1";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression entreprise ');
				}
				
				Public function rajout_suppr_fictive_ent($objet, $conn)
				{
					$id_ent = $objet->get_id_entreprise();
					$nom_ent = $objet->get_nom_entreprise();
					$nom_resp = $objet->get_nom_responsable();
					$prenom_resp = $objet->get_prenom_responsable();
					$mail_ent = $objet->get_mail_entreprise();
					$rue_ent = $objet->get_rue_entreprise();
					$ville_ent = $objet->get_ville_entreprise();
					$cp_ent = $objet->get_cp_entreprise();
					$photo_ent = $objet->get_photo_entreprise();
					$login_ent = $objet->get_login_entreprise();
					$mdp_ent = $objet->get_mdp_entreprise();
					$etat_ent = $objet->get_etat_entreprise();
					
					print $SQL = "UPDATE entreprise SET etat_entreprise=0";
				 	$Req = $conn -> query ($SQL) or die (' Erreur rajout entreprise ');
				}
}
	/* ---------------------- */
	/* FIN class Entreprise */
	/* ---------------------- */
?>
