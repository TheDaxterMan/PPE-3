<?php
include "class_utilisateur.php";

  /* ---------------------- */
  /* DEBUT class Interet */
  /* ---------------------- */

class interet extends utilisateur
	{
    /* ---------------------- */
    /* class Interet Variables */
    /* ---------------------- */

		Private $id_int;
		Private $id_utilisateur;

    /* ---------------------- */
    /* class Interet Constructeur */
    /* ---------------------- */


    Public function interet ( $id_int, $id_uti)
    {
   	$this -> id_interet = $id_int;
   	$this -> id_utilisateur = $id_uti;
    }

		public function getallint()
		{
			$data = $this->id_interet;
			$data = $data.$this->id_utilisateur;
			return $data;
		}

    /* ---------------------- */
    /* class Interet GET */
    /* ---------------------- */

    Public function get_id_interet ()
    {
      return $this-> id_interet;
    }

    Public function get_id_utilisateur ()
    {
      return $this-> id_utilisateur;
    }


    /* ---------------------- */
    /* class Interet SET */
    /* ---------------------- */

    Public function set_id_interet ($id_int)
    {
       $this-> id_interet = $id_int;
    }

    Public function set_id_utilisateur ($id_uti)
    {
       $this-> id_utilisateur = $id_uti;
    }

		/* ---------------------- */
 	 /* class Interet fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $id_uti = $objet->get_id_utilisateur();

			 print $SQL = " INSERT INTO interesse values ($id_int, '$id_uti')";
		$Req = $conn -> query ($SQL) or die (' Erreur ajout interet ');
	 }

		 Public function modif_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
			 $img_int = $objet->get_img_interet();
			 $etat_int = $objet->get_etat_interet();
		 	 $id_util = $objet->get_id_utilisateur();

			 $SQL = "UPDATE centres_interets SET lib_interet = '$lib_int', img_interet = '$img_int' WHERE id_interet = $id_int)";
			 $conn -> query ($SQL);
		 }

		 Public function affiche_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
		   	 $img_int = $objet->get_img_interet();
			 $etat_int = $objet->get_etat_interet();

			 $SQL = " SELECT * From centres_interets WHERE id_interet = '$id_int'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
		   	$img_int = $objet->get_img_interet();
			$etat_int = $objet->get_etat_interet();

			 $SQL = " DELETE FROM centres_interets WHERE id_interet = '$id_int'";
			 $conn -> query ($SQL);
		 }

		Public function suppr_fictive_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
			 $img_int = $objet->get_img_interet();
			 $etat_int = $objet->get_etat_interet();

			 $SQL = "UPDATE centres_interets SET  etat_interet = '$etat_int' WHERE id_interet = $id_int)";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Interet */
   /* ---------------------- */

?>
