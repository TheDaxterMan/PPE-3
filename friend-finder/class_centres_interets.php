<?php

  /* ---------------------- */
  /* DEBUT class Interet */
  /* ---------------------- */

class interet
	{
    /* ---------------------- */
    /* class Interet Variables */
    /* ---------------------- */

		Private $id_int;
		Private $lib_int;
		Private $img_int;

    /* ---------------------- */
    /* class Interet Constructeur */
    /* ---------------------- */


    Public function ( $id_int, $lib_int, $img_int)
    {
      $this -> id_interet = $id_int;
			$this -> lib_interet = $lib_int;
      $this -> img_interet = $img_int;
    }

		public function getallint()
		{
			$data = $this->id_interet;
			$data = $data.$this->lib_interet;
			$data = $data.$this->$img_interet;
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

    /* ---------------------- */
    /* class Interet SET */
    /* ---------------------- */

    Public function set_lib_interet ($lib_int)
    {
       $this-> lib_interet = $lib_int;
    }

		Public function set_img_interet ($img_int)
		{
			 $this-> img_interet = $img_int;
		}

		/* ---------------------- */
 	 /* class Interet fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
			 $img_int = $objet->get_img_interet();

			 $SQL = " INSERT INTO interet values ('NULL', '$lib_int', '$img_int', '$conn')";
			 $conn -> query ($SQL);
		 }

		 Public function modif_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
			 $img_int = $objet->get_img_interet();

			 $SQL = "UPDATE interet SET id_interet = '$id_int', lib_interet = '$lib_int', img_interet = '$img_int')";
			 $conn -> query ($SQL);
		 }

		 Public function affiche_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
		   $img_int = $objet->get_img_interet();

			 $SQL = " SELECT * From interet WHERE id_interet = '$id_int'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_interet ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interet();
			 $lib_int = $objet->get_lib_interet();
		   $img_int = $objet->get_img_interet();

			 $SQL = " DELETE FROM interet WHERE id_interet = '$id_int'";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Interet */
   /* ---------------------- */

?>