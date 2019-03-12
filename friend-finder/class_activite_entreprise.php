<?php

include 'bdd.inc.php';

  /* ---------------------- */
  /* DEBUT class Activite_entreprise */
  /* ---------------------- */

class activite_entreprise
{
    /* ---------------------- */
    /* class Activite_entreprise Variables */
    /* ---------------------- */
	Private $id_activite;
    	Private $lib_activite;
	Private $etat_activite;
	
    /* ---------------------- */
    /* class Activite_entreprise Constructeur */
    /* ---------------------- */
    Public function activite_entreprise ( $id_act, $lib_act)
    {
      $this -> id_activite = $id_act;
      $this -> lib_activite = $lib_act;
      $this -> etat_activite = $etat_act;
    }

		/* ---------------------- */
		/* fonction Activite_entreprise getalldata */
		/* ---------------------- */

		public function getallact()
		{
			$data = $this->$id_act;
			$data = $data.$this->$lib_act;
			$data = $data.$this->$etat_act;
			return $data;
		}
 
    /* ---------------------- */
    /* class Activite_entreprise GET */
    /* ---------------------- */
    Public function get_id_activite ()
    {
      return $this-> id_activite;
    }
    Public function get_lib_activite ()
    {
      return $this-> lib_activite;
    }
    Public function get_etat_activite ()
    {
      return $this-> etat_activite;
    }
    /* ---------------------- */
    /* class Activite_entreprise SET */
    /* ---------------------- */

    Public function set_lib_activite ($lib_act)
    {
       $this-> lib_activite = $lib_act;
    }

    Public function set_etat_activite ($etat_act)
    {
	$this-> etat_activite = $etat_act;
    }
	
		/* ---------------------- */
		/* class Activite_entreprise fonctions publiques */
		/* ---------------------- */
		Public function ajout_activite ($objet, $conn)
			{
				$id_act = $objet->get_id_activite();
				$lib_act = $objet->get_lib_activite();
				$etat_act = $objet->get_etat_activite();

				print $SQL = " INSERT INTO activite_entreprise values (NULL, '$lib_act', '0')";
				$req = $conn -> query ($SQL) or die (' Erreur ajout activite ');
			}

			Public function modif_activite ($objet, $conn)
			{
				$id_act = $objet->get_id_activite();
				$lib_act = $objet->get_lib_activite();
				$etat_act = $objet->get_etat_activite();

				print $SQL = "UPDATE activite_entreprise SET lib_activite = '$lib_act'
				WHERE id_activite = '$id_act'";
				$req = $conn -> query ($SQL) or die (' Erreur modification activite ');
			}

			Public function affiche_activite ($objet, $conn)
			{

				$id_act = $objet->get_id_activite();
				$lib_act = $objet->get_lib_activite();
				$etat_act = $objet->get_etat_activite();
				
				print $SQL = " SELECT *  From activite_entreprise WHERE id_activite = '$id_act'";
				$req = $conn -> query ($SQL) or die (' Erreur affichage activite ');
				Return $res = $req -> fetch ();
			}

			Public function suppr_activite ($objet, $conn)
			{
				$id_act = $objet->get_id_activite();
				$lib_act = $objet->get_lib_activite();
				$etat_act = $objet->get_etat_activite();
				
				print $SQL = " DELETE FROM activite_entreprise WHERE id_activite = '$id_act'";
				$req = $conn -> query ($SQL) or die (' Erreur suppression activite ');
			}

  }
  /* ---------------------- */
  /* FIN class Activite_entreprise */
  /* ---------------------- */

?>
