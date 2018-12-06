<?php

include "class_stage.php";
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

			Public function stage ( $id_sta, $lib_sta, $desc_sta, $date_sta, $comm_sta)
			{
				$this -> id_stage = $id_sta;
				$this -> lib_stage = $lib_sta;
				$this -> desc_stage = $desc_sta;
				$this -> date_stage = $date_sta;
				$this -> commentaire_stage = $comm_sta;

			}

      /* ---------------------- */
			/* fonction Stage getalldata */
			/* ---------------------- */

			public function getallstage()
			{
				$data = $this->$id_sta;
				$data = $data.$this->$lib_sta;
				$data = $data.$this->$desc_sta;
				$data = $data.$this->$date_sta;
				$data = $data.$this->$comm_sta;
				return $data;
			}

			/* ---------------------- */
			/* class Stage GET */
			/* ---------------------- */

			Public function get_id_stage ()
			{
				return $this-> id_stage;
			}

			Public function get_lib_stage ()
			{
				return $this-> lib_stage;
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

			Public function set_lib_stage ($lib_sta)
			{
				 $this-> lib_stage = $lib_sta;
			}

			Public function set_desc_stage ($desc_sta)
			{
				 $this-> desc_stage = $desc_sta;
			}

			Public function set_date_stage ($date_sta)
			{
				 $this-> date_stage = $date_sta;
			}

			Public function set_commentaire_stage ($comm_sta)
			{
				 $this-> commentaire_stage = $comm_sta;
			}
      /* ---------------------- */
      /* class Stage fonctions publiques */
      /* ---------------------- */
      Public function ajout_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
					$date_sta = $objet->get_date_stage();
					$comm_sta = $objet->get_comm_stage();

					print $SQL = " INSERT INTO stage values (NULL, '$lib_sta', '$desc_sta', '$date_sta', '$comm_sta')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout stage ');
				}

				Public function modif_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
					$date_sta = $objet->get_date_stage();
					$comm_sta = $objet->get_comm_stage();

					print $SQL = "UPDATE stage SET lib_stage = '$lib_sta', desc_stage = '$desc_sta',
					date_stage = '$date_sta', comm_stage = '$comm_sta' WHERE id_stage = '$id_sta'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification stage ');
				}

				Public function affiche_stage ($objet, $conn)
				{

					$id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
					$date_sta = $objet->get_date_stage();
					$comm_sta = $objet->get_comm_stage();


					print $SQL = " SELECT *  From stage WHERE id_stage = '$id_sta'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage stage ');
					Return $Res = $Req -> fetch ();
				}

				Public function suppr_stage ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
					$date_sta = $objet->get_date_stage();
					$comm_sta = $objet->get_comm_stage();


					print $SQL = " DELETE FROM `stage` WHERE id_stage = '$id_sta'";
          $Req = $conn -> query ($SQL) or die (' Erreur affichage stage ');
				}
 }

	/* ---------------------- */
	/* FIN class Stage */
	/* ---------------------- */

?>
