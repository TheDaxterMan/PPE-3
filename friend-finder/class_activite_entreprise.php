<?php

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

    Public function ami ( $id_util, $id_util_ami)
    {
      $this -> id_utilisateur = $id_util;
      $this -> id_utilisateur_ami = $id_util_ami;
    }

		/* ---------------------- */
		/* fonction Ami getalldata */
		/* ---------------------- */

		Public function getallami()
		{
			$data = $this->$id_util;
			$data = $data.$this->$id_util_act;
			return $data;
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

    Public function set_id_utilisateur ($id_util)
    {
       $this-> id_utilisateur = $id_util;
    }

    Public function set_id_utilisateur_ami ($id_util_ami)
    {
       $this-> id_utilisateur_ami = $id_util_ami;
    }

		/* ---------------------- */
 	 /* class Ami fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_ami ($objet, $conn)
		 {
			 $id_util = $objet->get_id_utilisateur();
			 $id_util_act = $objet->get_id_utilisateur_ami();

			 print $SQL = " INSERT INTO ami values (NULL, '$id_util_act')";
			 $Req = $conn -> query ($SQL) or die (' Erreur ajout ami ');
		 }

		 Public function modif_ami ($objet, $conn)
		 {
			 $id_util = $objet->get_id_utilisateur();
			 $id_util_act = $objet->get_id_utilisateur_ami();

			 print $SQL = "UPDATE ami SET id_utilisateur_ami = '$id_util_act'
			 WHERE id_utilisateur = '$id_util'";
			 $Req = $conn -> query ($SQL) or die (' Erreur modification ami ');
		 }

		 Public function affiche_ami ($objet, $conn)
		 {

			 $id_util = $objet->get_id_utilisateur();
			 $id_util_act = $objet->get_id_utilisateur_ami();

			 print $SQL = " SELECT *  From ami WHERE id_utilisateur = '$id_util'";
			 $Req = $conn -> query ($SQL) or die (' Erreur affichage ami ');
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_ami ($objet, $conn)
		 {
			 $id_util = $objet->get_id_utilisateur();
			 $id_util_act = $objet->get_id_utilisateur_ami();

			 print $SQL = " DELETE FROM `ami` WHERE id_utilisateur = '$id_util'";
			 $Req = $conn -> query ($SQL) or die (' Erreur suppression ami ');
		 }
}
   /* ---------------------- */
   /* FIN class Ami */
   /* ---------------------- */

?>
