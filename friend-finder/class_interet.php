<?php

  /* ---------------------- */
  /* DEBUT class Interet */
  /* ---------------------- */
 
class interet extends utilisateur
	{
    /* ---------------------- */
    /* class Interet Variables */
    /* ---------------------- */

		Private $id_int;
		Private $lib_int;
		Private $img_int;
		Private $etat_int;

    /* ---------------------- */
    /* class Interet Constructeur */
    /* ---------------------- */


    Public function interet ( $id_int, $lib_int, $img_int, $etat_int)
    {
   	$this -> id_interet = $id_int;
   	$this -> lib_interet = $lib_int;
   	$this -> img_interet = $img_int;
	$this -> etat_interet = $etat_int;
    }

		public function getallint()
		{
			$data = $this->id_interet;
			$data = $data.$this->lib_interet;
			$data = $data.$this->img_interet;
			$data = $data.$this->etat_interet;
			return $data;
		}

    /* ---------------------- */
    /* class Interet GET */
    /* ---------------------- */

    Public function get_id_interet ()
    {
      return $this-> id_interet;
    }

    Public function get_lib_interet ()
    {
      return $this-> lib_interet;
    }

    Public function get_img_interet ()
    {
      return $this-> img_interet;
    }

    Public function get_etat_interet ()
    {
	return $this-> etat_interet;
    }

    /* ---------------------- */
    /* class Interet SET */
    /* ---------------------- */

    Public function set_lib_interet ($lib_int)
    {
       $this-> lib_interet = $lib_int;
    }

	Public function set_lib_interet ($lib_int)
    {
       $this-> lib_interet = $lib_int;
    }

		Public function set_etat_interet ($etat_int)
		{
			 $this-> etat_interet = $etat_int;
		}

		/* ---------------------- */
 	 /* class Interet fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
			 $img_int = $objet->get_img_interet();
			 $etat_int = $objet->get_etat_interet();
		 
			 print $SQL = " INSERT INTO centres_interets values (NULL, '$lib_int', '$img_int', '$etat_int')";
		$Req = $conn -> query ($SQL) or die (' Erreur ajout utilisateur ');
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
