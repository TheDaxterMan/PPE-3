<?php
 
include "class_ami.php";
include "class_diplome.php";
include "class_emploi.php";
include "class_entreprise.php";
include "classe_stage.php";
include "class_utilisateur.php";

  /* ---------------------- */
  /* DEBUT class Ami */
  /* ---------------------- */

class ami
	{
    /* ---------------------- */
    /* class Ami Variables */
    /* ---------------------- */

		Private $id_utilisateur;
		Private $id_utilisateur_ami;

    /* ---------------------- */
    /* class Ami Constructeur */
    /* ---------------------- */


    Public function ( $id_util, $id_util_ami)
    {
      $this -> id_utilisateur = $id_util;
      $this -> id_utilisateur_ami = $id_util_ami;
    }

    /* ---------------------- */
    /* class Ami GET */
    /* ---------------------- */

    Public function get_id_utilisateur ()
    {
      return $this-> id_utilisateur;
    }

    Public function get_id_utilisateur_ami ()
    {
      return $this-> id_utilisateur_ami;
    }

    /* ---------------------- */
    /* class Ami SET */
    /* ---------------------- */

    Public function set_id_utilisateur_ami ($id_util_ami)
    {
       $this-> id_utilisateur_ami = $id_util_ami;
    }

		/* ---------------------- */
 	 /* class Ami fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_ami ($id_util, $id_util_ami, $conn)
		 {
			 $SQL = " INSERT INTO values ('NULL', '$id_util_ami', '$conn')";
			 $conn -> query ($SQL);
		 }
		 Public function modif_ami ($id_util, $id_util_ami)
		 {
			 $SQL = "UPDATE ami SET id_utilisateur = '$id_util', id_utilisateur_ami = '$id_util_ami')";
			 $conn -> query ($SQL);
		 }
		 Public function affiche_ami ($id_util_ami)
		 {
			 $SQL = " SELECT * From ami WHERE id_utilisateur_ami = '$id_util_ami'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }
		 Public function suppr_ami ($id_util, $id_util_ami)
		 {
			 $SQL = " DELETE FROM ami WHERE $id_util_ami = '$id_util_ami'";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Ami */
   /* ---------------------- */

?>
