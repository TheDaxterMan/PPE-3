<?php

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
		Private $etat_dip;

    /* ---------------------- */
    /* class Diplome Constructeur */
    /* ---------------------- */

    Public function diplome ($id_dip, $nom_dip, $lib_dip, $etat_dip)
    {
      $this -> id_diplome = $id_dip;
      $this -> nom_diplome = $nom_dip;
	$this -> lib_diplome = $lib_dip;
     $this -> etat_diplome = $etat_dip;
    }

		public function getalldip()
		{
			$data = $this->id_diplome;
			$data = $data.$this->nom_diplome;
			$data = $data.$this->lib_diplome;
			$data = $data.$this->etat_diplome;
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

	Public function get_etat_diplome ()
	{
		return $this-> etat_diplome;
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

    Public function set_etat_diplome ($etat_dip)
    {
       $this-> etat_diplome = $etat_dip;
    }
		/* ---------------------- */
 	 /* class Diplome fonctions publiques */
 	 /* ---------------------- */

	 Public function ajout_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
			 $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
		  	 $etat_dip = $objet->get_etat_diplome();

			 print $SQL = " INSERT INTO diplome values (NULL, '$nom_dip', '$lib_dip', '$etat_dip')";
			 $Req = $conn -> query ($SQL) or die (' Erreur ajout diplome ');

		 }

		 Public function modif_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
			 $nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
		  	 $etat_dip = $objet->get_etat_diplome();

			 print $SQL = "UPDATE diplome SET nom_diplome = '$nom_diplome', lib_diplome = '$lib_diplome' WHERE id_diplome = $id_diplome )";
			 $Req = $conn -> query ($SQL) or die (' Erreur modif diplome ');
		 }

		 Public function affiche_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
		   	$nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
			$etat_dip = $objet->get_etat_diplome();
			
			print $SQL = " SELECT * From diplome WHERE id_diplome = '$id_dip'";
			 $Req = $conn -> query ($SQL);
			 Return $Res = $Req -> fetch ();
		 }

		 Public function suppr_diplome ($objet, $conn)
		 {
			 $id_dip = $objet->get_id_diplome();
		   	$nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
			$etat_dip = $objet->get_etat_diplome();
			 
			 print $SQL = " DELETE FROM diplome WHERE id_diplome = '$id_dip'";
			 $conn -> query ($SQL);
		 }
		
		Public function suppr_fictive_interet ($objet, $conn)
		 {
			$id_dip = $objet->get_id_diplome();
		   	$nom_dip = $objet->get_nom_diplome();
			 $lib_dip = $objet->get_lib_diplome();
			$etat_dip = $objet->get_etat_diplome();
			 
			 print $SQL = "UPDATE interet SET  etat_diplome = '$etat_dip' WHERE id_diplome = $id_dip)";
			 $conn -> query ($SQL);
		 }
}
   /* ---------------------- */
   /* FIN class Diplome */
   /* ---------------------- */

?>
