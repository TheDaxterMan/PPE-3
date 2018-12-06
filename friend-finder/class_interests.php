<?php

  /* ---------------------- */
  /* DEBUT class Interet */
  /* ---------------------- */

class interests
	{
    /* ---------------------- */
    /* class Interet Variables */
    /* ---------------------- */

		Private $id_int;
		Private $nom_int;

    /* ---------------------- */
    /* class Interet Constructeur */
    /* ---------------------- */


    Public function ( $id_int, $nom_int)
    {
      $this -> id_interests = $id_int;
      $this -> nom_interests = $nom_int;
    }

		public function getallint()
		{
			$data = $this->id_interests;
			$data = $data.$this->nom_interests;
			return $data;
		}

    /* ---------------------- */
    /* class Interet GET */
    /* ---------------------- */

    Public function get_id_interests ()
    {
      return $this-> id_interests;
    }

    Public function get_nom_interests ()
    {
      return $this-> nom_interests;
    }

    /* ---------------------- */
    /* class Interet SET */
    /* ---------------------- */

    Public function set_nom_interests ($nom_int)
    {
       $this-> id_nom_interests = $nom_int;
    }

		/* ---------------------- */
 	 /* class Interet fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_interests ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interests();
			 $nom_int = $objet->get_nom_interests();

			 $SQL = " INSERT INTO interests values ('NULL', '$nom_int', '$conn')";
			 $conn -> query ($SQL);
		 }

		 Public function modif_interests ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interests();
			 $nom_int = $objet->get_nom_interests();

			 $SQL = "UPDATE interests SET id_interests = '$id_int', nom_interests = '$nom_int')";
			 $conn -> query ($SQL);
		 }

		 Public function affiche_interests ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interests();
		   $nom_int = $objet->get_nom_interests();

			 $SQL = " SELECT * From interests WHERE id_interests = '$id_int'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_interests ($objet, $conn)
		 {
			 $id_int = $objet->get_id_interests();
		   $nom_int = $objet->get_nom_interests();

			 $SQL = " DELETE FROM interests WHERE id_interests = '$id_int'";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Interet */
   /* ---------------------- */

?>
