<?php

  /* ---------------------- */
  /* DEBUT class Emploi */
  /* ---------------------- */

class emploi
	{
    /* ---------------------- */
    /* class Emploi Variables */
    /* ---------------------- */

		Private $id_emploi;
    Private $lib_emploi;
    Private $desc_emploi;

    /* ---------------------- */
    /* class Emploi Constructeur */
    /* ---------------------- */

    Public function emploi ( $id_emp, $lib_emp, $desc_emp)
    {
      $this -> id_emploi = $id_emp;
      $this -> lib_emploi = $lib_emp;
      $this -> desc_emploi = $desc_emp;
    }

		/* ---------------------- */
		/* fonction Emploi getalldata */
		/* ---------------------- */

		public function getallemploi()
		{
			$data = $this->$id_emp;
			$data = $data.$this->$lib_emp;
			$data = $data.$this->$desc_emp;
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

    /* ---------------------- */
    /* class Emploi SET */
    /* ---------------------- */

    Public function set_lib_emploi ($lib_emp)
    {
       $this-> lib_emploi = $lib_emp;
    }

    Public function set__desc_emploi ($desc_emp)
    {
       $this-> desc_emploi = $desc_emp;
    }

	/* ---------------------- */
	/* class Emploi fonctions publiques */
	/* ---------------------- */
	Public function ajout_emploi_util ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();

			print $SQL = " INSERT INTO emploi values (NULL, '$lib_emp', '$desc_emp', NULL, '1')";
			$Req = $conn -> query ($SQL) or die (' Erreur ajout emploi ');
		}

		Public function ajout_emploi_ent ($objet, $conn)
			{
				$id_emp = $objet->get_id_emploi();
				$lib_emp = $objet->get_lib_emploi();
				$desc_emp = $objet->get_desc_emploi();

				print $SQL = " INSERT INTO emploi values (NULL, '$lib_emp', '$desc_emp', '3', NULL)";
				$Req = $conn -> query ($SQL) or die (' Erreur ajout emploi ');
			}

		Public function modif_emploi ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();

			print $SQL = "UPDATE emploi SET lib_emploi = '$lib_emp', desc_emploi = '$desc_emp',
			WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur modification emploi ');
		}

		Public function affiche_emploi ($objet, $conn)
		{

			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();

			print $SQL = " SELECT *  From emploi WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur affichage emploi ');
			Return $Res = $Req -> fetch ();
		}

		Public function suppr_emploi ($objet, $conn)
		{
			$id_emp = $objet->get_id_emploi();
			$lib_emp = $objet->get_lib_emploi();
			$desc_emp = $objet->get_desc_emploi();

			print $SQL = " DELETE FROM emploi WHERE id_emploi = '$id_emp'";
			$Req = $conn -> query ($SQL) or die (' Erreur suppression emploi ');
		}
}
  /* ---------------------- */
  /* FIN class Emploi */
  /* ---------------------- */

?>
