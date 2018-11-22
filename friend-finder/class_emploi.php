<?php

include "class_activite_entreprise.php";
include "class_ami.php";
include "class_emploi.php";
include "class_entreprise.php";
include "classe_stage.php";
include "class_utilisateur.php";

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

    Public function ( $id_emp, $lib_emp, $desc_emp)
    {
      $this -> id_emploi = $id_emp;
      $this -> lib_emploi = $lib_emp;
      $this -> desc_emploi = $desc_emp;
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

    Public function set_id_emploi ($id_emp)
    {
       $this-> id_emploi = $id_emp;
    }

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
	Public function ajout_emploi ($id_emp, $lib_emp, $desc_emp, $conn)
		{
			$SQL = " INSERT INTO values ('NULL', '$lib_emp', '$desc_emp', '$conn')";
			$conn -> query ($SQL);
		}
		Public function modif_emploi ($id_emp, $lib_emp, $desc_emp, $conn)
		{
			$SQL = "UPDATE emploi SET id_emploi = '$id_emp', lib_emploi = '$lib_emp', desc_emploi = '$desc_emp')";
			$conn -> query ($SQL);
		}
		Public function affiche_emploi ($lib_emp, $desc_emp)
		{
			$SQL = " SELECT * From emploi WHERE lib_emploi = '$lib_emp'";
			$Req = $conn -> query ($SQL);
			Return $Res = $Req -> fetch ();
		}
		Public function suppr_emploi ($id_emp, $lib_emp, $desc_emp)
		{
			$SQL = " DELETE FROM `emploi` WHERE lib_emploi = '$lib_emp'";
			$conn -> query ($SQL);
		}
}
  /* ---------------------- */
  /* FIN class Emploi */
  /* ---------------------- */

?>
