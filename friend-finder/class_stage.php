<?php

include "class_activite_entreprise.php";
include "class_ami.php";
include "class_diplome.php";
include "class_stage.php";
include "class_entreprise.php";
include "class_utilisateur.php";

	/* ---------------------- */
	/* DEBUT class Stage */
	/* ---------------------- */

class stage
 {

		/* ---------------------- */
		/* class Stage Variables */
		/* ---------------------- */

		Private $id_stage;
		Private $lib_stage;
		Private $desc_stage;
		Private $date_stage;
		Private $commentaire_stage;

		/* ---------------------- */
		/* class Stage Constructeur */
		/* ---------------------- */

			Public function ( $id_stage, $nom_stage, $desc_stage, $date_stage, $comm_stage)
			{
				$this -> id_stage = $id_stage;
				$this -> nom_stage = $nom_stage;
				$this -> desc_stage = $desc_stage;
				$this -> date_stage = $date_stage;
				$this -> commentaire_stage = $comm_stage;

			}

			/* ---------------------- */
			/* class Stage GET */
			/* ---------------------- */

			Public function get_id_stage ()
			{
				return $this-> id_stage;
			}

			Public function get_nom_stage ()
			{
				return $this-> nom_stage;
			}

			Public function get_desc_stage ()
			{
				return $this-> desc_stage;
			}

			Public function  get_date_stage ()
			{
				return $this-> date_stage;
			}

			Public function  get_commentaire_stage ()
			{
				return $this-> commentaire_stage;
			}

			/* ---------------------- */
			/* class Stage SET */
			/* ---------------------- */

			Public function set_id_stage ($id_stage)
			{
				 $this-> id_stage = $id_stage;
			}

			Public function set_nom_stage ($nom_stage)
			{
				 $this-> nom_stage = $nom_stage;
			}

			Public function set_desc_stage ($desc_stage)
			{
				 $this-> desc_stage = $desc_stage;
			}

			Public function set_date_stage ($date_stage)
			{
				 $this-> date_stage = $date_stage;
			}

			Public function set_commentaire_stage ($comm_stage)
			{
				 $this-> commentaire_stage = $comm_stage;
			}
      /* ---------------------- */
      /* class Stage fonctions publiques */
      /* ---------------------- */
      Public function ajout_stage ($id_stage, $nom_stage, $desc_stage, $date_stage, $comm_stage, $conn)
        {
          $SQL = " INSERT INTO values ('NULL', '$nom_stage', '$desc_stage', '$date_stage', '$comm_stage')";
          $conn -> query ($SQL);
        }
        Public function modif_stage ($id_stage, $nom_stage, $desc_stage, $date_stage, $comm_stage, $conn)
        {
          $SQL = "UPDATE stage SET id_stage = '$id_stage', nom_stage = '$nom_stage', desc_stage = '$desc_stage', date_stage = '$date_stage' , commentaire_stage = '$comm_stage')";
          $conn -> query ($SQL);
        }
        Public function affiche_stage ($nom_stage, $desc_stage, $date_stage, $comm_stage)
        {
          $SQL = " SELECT * From stage WHERE nom_stage = '$nom_stage', desc_stage = '$desc_stage', date_stage = '$date_stage' , commentaire_stage = '$comm_stage'";
          $Req = $conn -> query ($SQL);
          Return $Res = $Req -> fetch ();
        }
        Public function suppr_stage ($id_stage, $nom_stage, $desc_stage, $date_stage, $comm_stage)
        {
          $SQL = " DELETE FROM `stage` WHERE nom_stage = '$nom_stage';
          $conn -> query ($SQL);
        }
 }

	/* ---------------------- */
	/* FIN class Stage */
	/* ---------------------- */

?>
