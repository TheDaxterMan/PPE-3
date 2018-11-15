<?php

/* DEBUT class Entreprise */

class entreprise
	{

		/* class Entreprise Variables */

		Private $id_entreprisePrimaire;
		Private $nom_entreprise;
		Private $nom_responsable;
		Private $prenom_responsable;
		Private $email_entreprise;
		Private $rue_entreprise;
		Private $ville_entreprise;
		Private $cp_entreprise;
		Private $login_entreprise;
		Private $mdp_entreprise;

		/* class Entreprise Constructeur */

			Public function  ( $id_ent, $nom_ent, $nom_resp, $prenom_resp, $email_ent, $rue_ent, $ville_ent, $cp_ent, $login_ent, $mdp_ent)
			{
				$this -> id_entreprise = $id_ent;
				$this -> nom_entreprise = $nom_ent;
				$this -> nom_responsable = $nom_resp;
				$this -> prenom_responsable = $prenom_resp;
				$this -> email_entreprise = $email_ent;
				$this -> rue_entreprise = $rue_ent;
				$this -> ville_entreprise = $ville_ent;
				$this -> cp_entreprise = $cp_ent;
				$this -> login_entreprise = $login_ent;
				$this -> mdp_entreprise = $mdp_ent;
			}

			/* class Entreprise GET */

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

			Public function  get_email_entreprise ()
			{
				return $this-> email_entreprise;
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

			Public function  get_login_entreprise ()
			{
				return $this-> login_entreprise;
			}

			Public function  get_mdp_entreprise ()
			{
				return $this-> mdp_entreprise;
			}

			/* class Entreprise SET */

			Public function set_id_entreprise ($id_ent)
			{
				 $this-> id_entreprise = $id_ent;
			}

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

			Public function set_email_entreprise ($email_ent)
			{
				 $this-> email_entreprise = $email_ent;
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

			Public function set_login_entreprise ($login_ent)
			{
				 $this-> login_entreprise = $login_ent;
			}

			Public function set_mdp_entreprise($mdp_ent)
			{
				 $this-> mdp_entreprise = $mdp_ent;
			}

	}
			/* FIN class Entreprise */

?>
