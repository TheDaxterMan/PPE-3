<?php

include "class_activite_utilisateur.php";
include "class_ami.php";
include "class_diplome.php";
include "class_emploi.php";
include "class_utilisateur.php";
include "classe_stage.php";

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
		Private $login_utilisateur;
		Private $mdp_utilisateur;

		/* ---------------------- */
		/* class Utilisateur Constructeur */
		/* ---------------------- */

			Public function ( $id_util, $nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $login_util, $mdp_util)
			{
				$this -> id_utilisateur = $id_util;
				$this -> nom_utilisateur = $nom_util;
				$this -> prenom_utilisateur = $prenom_util;
				$this -> tel_utilisateur = $tel_util;
				$this -> email_utilisateur = $email_util;
				$this -> rue_utilisateur = $rue_util;
				$this -> ville_utilisateur = $ville_util;
				$this -> cp_utilisateur = $cp_util;
				$this -> login_utilisateur = $login_util;
				$this -> mdp_utilisateur = $mdp_util;
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

			Public function  get_login_utilisateur ()
			{
				return $this-> login_utilisateur;
			}

			Public function  get_mdp_utilisateur ()
			{
				return $this-> mdp_utilisateur;
			}

			/* ---------------------- */
			/* class Utilisateur SET */
			/* ---------------------- */

			Public function set_id_utilisateur ($id_util)
			{
				 $this-> id_utilisateur = $id_util;
			}

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

			Public function set_login_utilisateur ($login_util)
			{
				 $this-> login_utilisateur = $login_util;
			}

			Public function set_mdp_utilisateur($mdp_util)
			{
				 $this-> mdp_utilisateur = $mdp_util;
			}

			/* ---------------------- */
			/* class Utilisateur fonctions publiques */
			/* ---------------------- */
			Public function ajout_utilisateur ($idutil, $nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $login_util, $mdp_util, $conn)
				{
					$SQL = " INSERT INTO values ('NULL', '$nom_util', '$prenom_util', '$tel_util', '$email_util', '$rue_util', '$ville_util', '$cp_util', '$login_util', '$mdp_util', '$conn')";
					$conn -> query ($SQL);
				}
				Public function modif_utilisateur ($idutil, $nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $login_util, $mdp_util, $conn)
				{
					$SQL = "UPDATE utilisateur SET id_utilisateur = '$idutil', nom_utilisateur = '$nom_util', prenom_utilisateur,  = '$prenom_util',
					tel_utilisateur = '$tel_util', email_utilisateur = '$email_util', rue_utilisateur = '$rue_util', ville_utilisateur = '$ville_util',
					cp_utilisateur = '$cp_util', login_utilisateur = '', mdp_utilisateur = '$mdp_util')";
					$conn -> query ($SQL);
				}

				Public function affiche_utilisateur ($nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $login_util, $mdp_util, $conn)
				{
					$SQL = " SELECT nom_utilisateur, prenom_utilisateur, tel_utilisateur, email_utilisateur, rue_utilisateur, ville_utilisateur, cp_utilisateur, login_utilisateur, mdp_utilisateur  From utilisateur WHERE nom_utilisateur = '$nom_util'";
					$Req = $conn -> query ($SQL);
					Return $Res = $Req -> fetch ();
				}
				Public function suppr_utilisateur ($idutil, $nom_util, $prenom_util, $tel_util, $email_util, $rue_util, $ville_util, $cp_util, $login_util, $mdp_util, $conn)
				{
					$SQL = " DELETE FROM `utilisateur` WHERE nom_utilisateur  = '$nom_util' ";
					$conn -> query ($SQL);
				}

}

	/* ---------------------- */
	/* FIN class Utilisateur */
	/* ---------------------- */

?>
