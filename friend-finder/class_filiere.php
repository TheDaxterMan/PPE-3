<?php

  /* ---------------------- */
  /* DEBUT class Filiere */
  /* ---------------------- */

class filiere
	{
    /* ---------------------- */
    /* class Filiere Variables */
    /* ---------------------- */

	Private $id_filiere;
    Private $lib_filiere;
	Private $etat_filiere;

    /* ---------------------- */
    /* class Filiere Constructeur */
    /* ---------------------- */

    Public function filiere ( $id_fil, $lib_fil, $etat_fil)
    {
      $this -> id_filiere = $id_fil;
      $this -> lib_filiere = $lib_fil;
	$this -> etat_filiere = $etat_fil;
    }

		/* ---------------------- */
		/* fonction Filiere getalldata */
		/* ---------------------- */

		public function getallfiliere()
		{
			$data = $this->$id_fil;
			$data = $data.$this->$lib_fil;
			$data = $data.$this->$etat_fil;
			return $data;
		}
 
    /* ---------------------- */
    /* class Filiere GET */
    /* ---------------------- */

    Public function get_id_filiere ()
    {
      return $this-> id_filiere;
    }

    Public function get_lib_filiere ()
    {
      return $this-> lib_filiere;
    }

    Public function get_etat_filiere ()
    {
      return $this-> etat_filiere;
    }
    /* ---------------------- */
    /* class Filiere SET */
    /* ---------------------- */

    Public function set_lib_filiere ($lib_fil)
    {
       $this-> lib_filiere = $lib_fil;
    }
	
	Public function set_etat_filiere ($etat_fil)
    {
       $this-> etat_filiere = $etat_fil;
    }

	/* ---------------------- */
	/* class Filiere fonctions publiques */
	/* ---------------------- */

	Public function ajout_filiere ($objet, $conn)
		{
			$id_fil = $objet->get_id_filiere();
			$lib_fil = $objet->get_lib_filiere();
			$etat_fil = $objet->get_etat_filiere();

			print $SQL = " INSERT INTO filiere values (NULL, '$lib_fil','0')";
			$Req = $conn -> query ($SQL) or die (' Erreur ajout filiere ');
		}

		Public function modif_filiere ($objet, $conn)
		{
			$id_fil = $objet->get_id_filiere();
			$lib_fil = $objet->get_lib_filiere();
			$etat_fil = $objet->get_etat_filiere();

			print $SQL = "UPDATE filiere SET lib_filiere = '$lib_fil',
			WHERE id_filiere = '$id_fil'";
			$Req = $conn -> query ($SQL) or die (' Erreur modification filiere ');
		}

		Public function affiche_filiere ($objet, $conn)
		{

			$id_fil = $objet->get_id_filiere();
			$lib_fil = $objet->get_lib_filiere();
			$etat_fil = $objet->get_etat_filiere();

			print $SQL = " SELECT *  From filiere WHERE id_filiere = '$id_fil'";
			$Req = $conn -> query ($SQL) or die (' Erreur affichage filiere ');
			Return $Res = $Req -> fetch ();
		}

		Public function suppr_filiere ($objet, $conn)
		{
			$id_fil = $objet->get_id_filiere();
			$lib_fil = $objet->get_lib_filiere();
			$etat_fil = $objet->get_etat_filiere();
			
			print $SQL = " DELETE FROM filiere WHERE id_filiere = '$id_fil'";
			$Req = $conn -> query ($SQL) or die (' Erreur suppression filiere ');
		}
	
		Public function suppr_fictive_filiere ($objet, $conn)
		 {
			 $id_fil = $objet->get_id_filiere();
			 $lib_fil = $objet->get_lib_filiere();
			 $etat_fil = $objet->get_etat_filiere();
			 
			 $SQL = "UPDATE interet SET etat_filiere = '$etat_fil' WHERE id_filiere = $id_filiere)";
			 $conn -> query ($SQL);
		 }
}
  /* ---------------------- */
  /* FIN class Filiere */
  /* ---------------------- */
 
?>
