<?php

include "class_dip.php";
include "class_dip.php";
include "class_emploi.php";
include "class_entreprise.php";
include "classe_stage.php";
include "class_diplome.php";

  /* ---------------------- */
  /* DEBUT class Diplome */
  /* ---------------------- */

class diplome
	{
    /* ---------------------- */
    /* class Diplome Variables */
    /* ---------------------- */

		Private $id_dip;
		Private $nom_dip;
		Private $lib_dip;

    /* ---------------------- */
    /* class Diplome Constructeur */
    /* ---------------------- */


    Public function diplome ( $id_dip, $nom_dip, $lib_dip)
    {
      $this -> id_diplome = $id_dip;
      $this -> nom_diplome = $nom_dip;
			$this -> lib_diplome = $lib_dip;
    }

		public function getalldip()
		{
			$data = $this->id_diplome;
			$data = $data.$this->nom_diplome;
			$data = $data.$this->lib_diplome;
			return $data;
		}
    /* ---------------------- */
    /* class Diplome GET */
    /* ---------------------- */

    Public function get_id_diplome ()
    {
      return $this-> id_diplome;
    }

    Public function get_nom_diplome ()
    {
      return $this-> nom_diplome;
    }

		Public function get_lib_diplome ()
    {
      return $this-> lib_diplome;
    }

    /* ---------------------- */
    /* class Diplome SET */
    /* ---------------------- */

    Public function set_nom_diplome ($nom_dip)
    {
       $this-> id_nom_diplome = $nom_dip;
    }

    Public function set_lib_diplome ($lib_dip)
    {
       $this-> lib_diplome = $lib_dip;
    }

		/* ---------------------- */
 	 /* class Diplome fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
			 $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();

			 $SQL = " INSERT INTO diplome values ('NULL', '$nom_dip', '$lib_dip', '$conn')";
			 $conn -> query ($SQL);
		 }

		 Public function modif_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
			 $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();

			 $SQL = "UPDATE diplome SET id_diplome = '$id_dip', id_diplome = '$id_dip')";
			 $conn -> query ($SQL);
		 }

		 Public function affiche_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
		   $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();

			 $SQL = " SELECT * From diplome WHERE id_diplome = '$id_dip'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
		   $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
			 
			 $SQL = " DELETE FROM diplome WHERE id_diplome = '$id_dip'";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Diplome */
   /* ---------------------- */

?>
