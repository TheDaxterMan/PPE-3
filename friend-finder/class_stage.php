<?php


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
    		Private $dated_stage;
		Private $datef_stage;
		Private $commentaire_stage;
		Private $etat_stage;
    Private $id_ent;
    Private $id_uti;
    		Private $fil_stage;

		/* ---------------------- */
		/* class Stage Constructeur */
		/* ---------------------- */

			Public function stage ( $id_sta, $lib_sta, $desc_sta, $dated_sta, $datef_sta, $comm_sta, $etat_sta, $id_ent, $id_uti, $fil_sta)
			{
				$this -> id_stage = $id_sta;
				$this -> lib_stage = $lib_sta;
				$this -> desc_stage = $desc_sta;
       	 			$this -> dated_stage = $dated_sta;
				$this -> datef_stage = $datef_sta;
				$this -> commentaire_stage = $comm_sta;
				$this -> etat_stage = $etat_sta;
        $this -> id_ent = $id_ent;
        $this -> id_uti = $id_uti;
        $this -> fil_stage = $fil_sta;

			}

      /* ---------------------- */
			/* fonction Stage getalldata */
			/* ---------------------- */

			public function getallstage()
			{
				$data = $this->$id_sta;
				$data = $data.$this->$lib_sta;
				$data = $data.$this->$desc_sta;
        			$data = $data.$this->$dated_sta;
				$data = $dataf.$this->$date_sta;
				$data = $data.$this->$comm_sta;
				$data = $data.$this->$etat_sta;
        $data = $data.$this->$id_ent;
        $data = $data.$this->$id_uti;
        $data = $data.$this->$fil_sta;
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

      Public function  get_dated_stage ()
			{
				return $this-> dated_stage;
			}

      Public function  get_datef_stage ()
      {
        return $this-> datef_stage;
      }

			Public function  get_commentaire_stage ()
			{
				return $this-> commentaire_stage;
			}

			Public function  get_etat_stage ()
			{
				return $this-> etat_stage;
			}

      Public function  get_id_ent ()
			{
				return $this-> id_ent;
			}

      Public function  get_id_uti ()
			{
				return $this-> id_uti;
			}

      Public function  get_fil_stage ()
			{
				return $this-> fil_stage;
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

			Public function set_dated_stage ($dated_sta)
			{
				 $this-> dated_stage = $dated_sta;
			}

      			Public function set_datef_stage ($datef_sta)
      			{
        			 $this-> datef_stage = $datef_sta;
      			}

			Public function set_commentaire_stage ($comm_sta)
			{
				 $this-> commentaire_stage = $comm_sta;
			}


			Public function set_etat_stage ($etat_sta)
			{
				 $this-> etat_stage = $etat_sta;
			}

      Public function set_id_ent ($id_ent)
			{
				 $this-> id_ent = $id_ent;
			}

      Public function set_id_uti ($id_uti)
			{
				 $this-> id_uti = $id_uti;
			}

      Public function set_fil_stage ($fil_sta)
			{
				 $this-> fil_stage = $fil_sta;
			}
      /* ---------------------- */
      /* class Stage fonctions publiques */
      /* ---------------------- */
      Public function ajout_stage_util ($objet, $conn)
				{
					$id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
          $dated_sta = $objet->get_dated_stage();
					$datef_sta = $objet->get_datef_stage();
					$comm_sta = $objet->get_commentaire_stage();
					$etat_sta = $objet->get_etat_stage();
          $id_ent = $objet->get_id_ent();
          $id_uti = $objet->get_id_uti();
          $fil_sta = $objet->get_fil_stage();

					print $SQL = " INSERT INTO stage values (NULL, '$lib_sta', '$desc_sta', '$dated_sta', '$datef_sta', '$comm_sta', '0', '1', '$id_uti', '$fil_sta')";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout stage ');
				}

        Public function ajout_stage_ent ($objet, $conn)
    				{
              $id_sta = $objet->get_id_stage();
    					$lib_sta = $objet->get_lib_stage();
    					$desc_sta = $objet->get_desc_stage();
              $dated_sta = $objet->get_dated_stage();
    					$datef_sta = $objet->get_datef_stage();
    					$comm_sta = $objet->get_commentaire_stage();
    					$etat_sta = $objet->get_etat_stage();
              $id_ent = $objet->get_id_ent();
              $id_uti = $objet->get_id_uti();
              $fil_sta = $objet->get_fil_stage();

    					print $SQL = " INSERT INTO stage values (NULL, '$lib_sta', '$desc_sta', '$dated_sta', '$datef_sta', '$comm_sta', '0', '$id_ent', '1', '$fil_sta')";
    					$Req = $conn -> query ($SQL) or die (' Erreur ajout stage ');
    				}

				Public function modif_stage ($objet, $conn)
				{
          $id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
          $dated_sta = $objet->get_dated_stage();
					$datef_sta = $objet->get_datef_stage();
					$comm_sta = $objet->get_commentaire_stage();
					$etat_sta = $objet->get_etat_stage();
          $id_ent = $objet->get_id_ent();
          $id_uti = $objet->get_id_uti();
          $fil_sta = $objet->get_fil_stage();

					print $SQL = "UPDATE stage SET lib_stage = '$lib_sta', desc_stage = '$desc_sta',
					dated_stage = '$dated_sta', datef_stage = '$datef_sta', comm_stage = '$comm_sta' WHERE id_stage = '$id_sta'";
				 	$Req = $conn -> query ($SQL) or die (' Erreur modification stage ');
				}

				Public function affiche_stage ($objet, $conn)
				{

          $id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
          $dated_sta = $objet->get_dated_stage();
					$datef_sta = $objet->get_datef_stage();
					$comm_sta = $objet->get_commentaire_stage();
					$etat_sta = $objet->get_etat_stage();
          $id_ent = $objet->get_id_ent();
          $id_uti = $objet->get_id_uti();
          $fil_sta = $objet->get_fil_stage();

					print $SQL = " SELECT *  From stage WHERE id_stage = '$id_sta'";
					$Req = $conn -> query ($SQL) or die (' Erreur affichage stage ');
					Return $Res = $Req -> fetch ();
				}

				Public function suppr_stage ($objet, $conn)
				{
          $id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
          $dated_sta = $objet->get_dated_stage();
					$datef_sta = $objet->get_datef_stage();
					$comm_sta = $objet->get_commentaire_stage();
					$etat_sta = $objet->get_etat_stage();
          $id_ent = $objet->get_id_ent();
          $id_uti = $objet->get_id_uti();
          $fil_sta = $objet->get_fil_stage();

					print $SQL = " DELETE FROM stage WHERE id_stage = '$id_sta'";
          $Req = $conn -> query ($SQL) or die (' Erreur affichage stage ');
				}

        Public function commentaire_stage ($objet, $conn)
				{
          $id_sta = $objet->get_id_stage();
					$lib_sta = $objet->get_lib_stage();
					$desc_sta = $objet->get_desc_stage();
          $dated_sta = $objet->get_dated_stage();
					$datef_sta = $objet->get_datef_stage();
					$comm_sta = $objet->get_commentaire_stage();
					$etat_sta = $objet->get_etat_stage();
          $id_ent = $objet->get_id_ent();
          $id_uti = $objet->get_id_uti();
          $fil_sta = $objet->get_fil_stage();

          $SQL = "UPDATE stage SET commentaire = '$comm_sta',
																	 id_utilisateur = '$id_uti'
				                        WHERE id_stage = $id_sta";
					$Req = $conn -> query ($SQL) or die (' Erreur ajout commentaire ');
				}
 }

	/* ---------------------- */
	/* FIN class Stage */
	/* ---------------------- */

?>
