<?php

include 'bdd.inc.php';

	/* ---------------------- */
	/* DEBUT class Utilisateur */
	/* ---------------------- */

class utilisateur
{
		/* ---------------------- */
		/* class Utilisateur Variables */
		/* ---------------------- */

		Private $id_utilisateur;
		Private $nom_utilisateur;
		Private $prenom_utilisateur;
		Private $tel_utilisateur;
		Private $email_utilisateur;
		Private $rue_utilisateur;
		Private $ville_utilisateur;
		Private $cp_utilisateur;
		Private $photo_utilisateur;
		Private $login_utilisateur;
		Private $mdp_utilisateur;
		Private $etat_utilisateur;

		/* ---------------------- */
		/* class Utilisateur Constructeur */
		/* ---------------------- */

			Public function utilisateur ( $id_util, $nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $photo_util, $login_util, $mdp_util, $etat_util)
			{
				$this -> id_utilisateur = $id_util;
				$this -> nom_utilisateur = $nom_util;
				$this -> prenom_utilisateur = $prenom_util;
				$this -> tel_utilisateur = $tel_util;
				$this -> email_utilisateur = $email_util;
				$this -> rue_utilisateur = $rue_util;
				$this -> ville_utilisateur = $ville_util;
				$this -> cp_utilisateur = $cp_util;
				$this -> photo_utilisateur = $photo_util;
				$this -> login_utilisateur = $login_util;
				$this -> mdp_utilisateur = $mdp_util;
				$this -> etat_utilisateur = $etat_util;
			}

			/* ---------------------- */
			/* fonction Utilisateur getalldata */
			/* ---------------------- */

			public function getallutil()
			{
				$data = $this->id_utilisateur;
				$data = $data.$this->nom_utilisateur;
				$data = $data.$this->prenom_utilisateur;
				$data = $data.$this->tel_utilisateur;
				$data = $data.$this->email_utilisateur;
				$data = $data.$this->rue_utilisateur;
				$data = $data.$this->ville_utilisateur;
				$data = $data.$this->cp_utilisateur;
				$data = $data.$this->photo_utilisateur;
				$data = $data.$this->login_utilisateur;
				$data = $data.$this->mdp_utilisateur;
				$data = $data.$this->etat_utilisateur;
				return $data;
			}

			/* ---------------------- */
			/* class Utilisateur GET */
			/* ---------------------- */

			Public function get_id_utilisateur ()
			{
				return $this-> id_utilisateur;
			}

			Public function get_nom_utilisateur ()
			{
				return $this-> nom_utilisateur;
			}

			Public function get_prenom_utilisateur ()
			{
				return $this-> prenom_utilisateur;
			}

			Public function  get_tel_utilisateur ()
			{
				return $this-> tel_utilisateur;
			}

			Public function  get_email_utilisateur ()
			{
				return $this-> email_utilisateur;
			}

			Public function  get_rue_utilisateur ()
			{
				return $this-> rue_utilisateur;
			}

			Public function  get_ville_utilisateur ()
			{
				return $this-> ville_utilisateur;
			}

			Public function  get_cp_utilisateur ()
			{
				return $this-> cp_utilisateur;
			}

			Public function  get_photo_utilisateur ()
			{
				return $this-> photo_utilisateur;
			}

			Public function  get_login_utilisateur ()
			{
				return $this-> login_utilisateur;
			}

			Public function  get_mdp_utilisateur ()
			{
				return $this-> mdp_utilisateur;
			}

			Public function  get_etat_utilisateur ()
			{
				return $this-> etat_utilisateur;
			}



			/* ---------------------- */
			/* class Utilisateur SET */
			/* ---------------------- */

			Public function set_nom_utilisateur ($nom_util)
			{
				 $this-> nom_utilisateur = $nom_util;
			}

			Public function set_prenom_utilisateur ($prenom_util)
			{
				 $this-> prenom_utilisateur = $prenom_util;
			}

			Public function set_tel_utilisateur ($tel_util)
			{
				 $this-> tel_utilisateur = $tel_util;
			}

			Public function set_email_utilisateur ($email_util)
			{
				 $this-> email_utilisateur = $email_util;
			}

			Public function set_rue_utilisateur ($rue_util)
			{
				 $this-> rue_utilisateur = $rue_util;
			}

			Public function set_ville_utilisateur ($ville_util)
			{
				 $this-> ville_utilisateur = $ville_util;
			}

			Public function set_cp_utilisateur ($cp_util)
			{
				 $this-> cp_utilisateur = $cp_util;
			}

			Public function set_photo_utilisateur ($photo_util)
			{
				 $this-> photo_utilisateur = $photo_util;
			}

			Public function set_login_utilisateur ($login_util)
			{
				 $this-> login_utilisateur = $login_util;
			}

			Public function set_mdp_utilisateur($mdp_util)
			{
				 $this-> mdp_utilisateur = $mdp_util;
			}

			Public function set_etat_utilisateur($etat_util)
			{
				 $this-> etat_utilisateur = $etat_util;
			}


			/* ---------------------- */
			/* class Utilisateur fonctions publiques */
			/* ---------------------- */
			Public function ajout_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = " INSERT INTO utilisateur values (NULL, '$nom_util', '$prenom_util', '$tel_util', '$email_util', '$rue_util', '$ville_util', '$cp_util', '$photo_util', '$login_util', '$mdp_util', '0', '1')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout utilisateur ');
				}

				Public function modif_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = "UPDATE utilisateur SET nom_utilisateur = '$nom_util', prenom_utilisateur  = '$prenom_util',
					tel_utilisateur = '$tel_util', email_utilisateur = '$email_util', rue_utilisateur = '$rue_util', ville_utilisateur = '$ville_util',
					cp_utilisateur = '$cp_util', mdp_utilisateur = '$mdp_util' WHERE id_utilisateur = '$id_util'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification utilisateur ');
				}

				Public function affiche_utilisateur_total($objet, $conn)
				{

					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$photo_util = $objet->get_photo_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();
					$etat_util = $objet->get_etat_utilisateur();

					print $SQL = " SELECT *  From utilisateur WHERE id_utilisateur = '$id_util'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage utilisateur ');
					Return $Res = $Req -> fetch ();

				}

				Public function suppr_utilisateur ($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur = '1'
					WHERE id_utilisateur = '$id_util'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression utilisateur ');
				}

				Public function suppr_fictive_util($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur=1 WHERE $id_util = '$id'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur suppression utilisateur ');
				}

				Public function rajout_suppr_fictive($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "UPDATE utilisateur SET etat_utilisateur='0'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur rajout utilisateur ');
				}

				Public function exp_pro_emploi($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "SELECT * FROM emploi, entreprise, utilisateur
		            WHERE utilisateur.id_utilisateur=$id_util
		            AND emploi.id_utilisateur=utilisateur.id_utilisateur
		            AND entreprise.id_entreprise=emploi.id_entreprise
		            ORDER BY date_crea DESC";
				 	$Req = $conn -> query ($SQL) or die (' Erreur affichage ');
					$Res = $Req -> fetch ();
					return $Res
				}

				Public function exp_pro_stage($objet, $conn)
				{
					$id_util = $objet->get_id_utilisateur();
					$nom_util = $objet->get_nom_utilisateur();
					$prenom_util = $objet->get_prenom_utilisateur();
					$tel_util = $objet->get_tel_utilisateur();
					$email_util = $objet->get_email_utilisateur();
					$rue_util = $objet->get_rue_utilisateur();
					$ville_util = $objet->get_ville_utilisateur();
					$cp_util = $objet->get_cp_utilisateur();
					$login_util = $objet->get_login_utilisateur();
					$mdp_util = $objet->get_mdp_utilisateur();

					print $SQL = "SELECT * FROM emploi, entreprise, utilisateur
		            WHERE utilisateur.id_utilisateur=$id_util
		            AND emploi.id_utilisateur=utilisateur.id_utilisateur
		            AND entreprise.id_entreprise=emploi.id_entreprise
		            ORDER BY date_crea DESC";
				 	$Req = $conn -> query ($SQL) or die (' Erreur affichage ');
					$Res = $Req -> fetch ();
					return $Res
				}
}
	/* ---------------------- */
	/* FIN class Utilisateur */
	/* ---------------------- */

?>
