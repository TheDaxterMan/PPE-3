<?php
  /* ---------------------- */
  /* DEBUT class Test */
  /* ---------------------- */
class test
	{
    /* ---------------------- */
    /* class Test Variables */
    /* ---------------------- */
	Private $id_test;
	Private $lib_test;
	Private $etat_test;
    /* ---------------------- */
    /* class Emploi Constructeur */
    /* ---------------------- */
    Public function test ( $id_t, $lib_t, $etat_t)
    {
      $this -> id_test = $id_t;
      $this -> lib_test = $lib_t;
	$this -> etat_test = $etat_t;    
    }
		/* ---------------------- */
		/* fonction Emploi getalldata */
		/* ---------------------- */
		public function getallemploi()
		{
			$data = $this->$id_t;
			$data = $data.$this->$lib_t;
			$data = $data.$this->$etat_t;
			return $data;
		}
    /* ---------------------- */
    /* class Emploi GET */
    /* ---------------------- */
    Public function get_id_emploi ()
    {
      return $this-> id_emploi;
    }
    Public function get_lib_emploi ()
    {
      return $this-> lib_emploi;
    }
    Public function get_desc_emploi ()
    {
      return $this-> desc_emploi;
    }
	Public function get_datec_emploi ()
	{
	return $this-> datec_emploi;
	}
	Public function get_etat_emploi ()
	{
	return $this-> etat_emploi;
	}
    /* ---------------------- */
    /* class Emploi SET */
    /* ---------------------- */
    Public function set_lib_emploi ($lib_emp)
    {
       $this-> lib_emploi = $lib_emp;
    }
    Public function set_desc_emploi ($desc_emp)
    {
       $this-> desc_emploi = $desc_emp;
    }
	Public function set_datec_emploi ($datec_emp)
    {
       $this-> desc_emploi = $datec_emp;
    }
	
	Public function set_etat_emploi ($etat_emp)
    {
       $this-> etat_emploi = $etat_emp;
    }
	/* ---------------------- */
	/* class Emploi fonctions publiques */
	/* ---------------------- */
	Public function ajout_emploi_util ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();
			$datec_emp = $objet->get_datec_emploi();
			$etat_emp = $objet->get_etat_emploi();
			print $SQL = " INSERT INTO emploi values (NULL, '$lib_emp', '$desc_emp', '$datec_emp', '1', '1', '1')";
			$Req = $conn -> query ($SQL) or die (' Erreur ajout emploi ');
		}
		Public function ajout_emploi_ent ($objet, $conn)
			{
				$id_emp = $objet->get_id_emploi();
				$lib_emp = $objet->get_lib_emploi();
				$desc_emp = $objet->get_desc_emploi();
				$datec_emp = $objet->get_datec_emploi();
				print $SQL = " INSERT INTO emploi values (NULL, '$lib_emp', '$desc_emp', '$datec_emp', '1', '1', '1')";
				$Req = $conn -> query ($SQL) or die (' Erreur ajout emploi ');
			}
		Public function modif_emploi ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();
			$datec_emp = $objet->get_datec_emploi();
			print $SQL = "UPDATE emploi SET lib_emploi = '$lib_emp', desc_emploi = '$desc_emp',
			WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur modification emploi ');
		}
		Public function affiche_emploi ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();
			$datec_emp = $objet->get_datec_emploi();
			print $SQL = " SELECT *  From emploi WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur affichage emploi ');
			Return $Res = $Req -> fetch ();
		}
		Public function suppr_emploi ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();
			$datec_emp = $objet->get_datec_emploi();
			print $SQL = " DELETE FROM emploi WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur suppression emploi ');
		}
}
  /* ---------------------- */
  /* FIN class Emploi */
  /* ---------------------- */
?>
