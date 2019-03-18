<?php
  /* ---------------------- */
  /* DEBUT class photo */
  /* ---------------------- */
class photo
	{
    /* ---------------------- */
    /* class photo Variables */
    /* ---------------------- */
	Private $id_photo;
    Private $nom_photo;
	Private $type_photo;
    /* ---------------------- */
    /* class photo Constructeur */
    /* ---------------------- */
    Public function photo ( $id_ph, $nom_ph, $type_ph)
    {
      $this -> id_photo = $id_ph;
      $this -> nom_photo = $nom_ph;
	$this -> type_photo = $type_ph;
    }
		/* ---------------------- */
		/* fonction photo getalldata */
		/* ---------------------- */
		public function getallphoto()
		{
			$data = $this->$id_ph;
			$data = $data.$this->$nom_ph;
			$data = $data.$this->$type_ph;
			return $data;
		}
 
    /* ---------------------- */
    /* class photo GET */
    /* ---------------------- */
    Public function get_id_photo ()
    {
      return $this-> id_photo;
    }
    Public function get_nom_photo ()
    {
      return $this-> nom_photo;
    }
    Public function get_type_photo ()
    {
      return $this-> type_photo;
    }
    /* ---------------------- */
    /* class photo SET */
    /* ---------------------- */
    Public function set_nom_photo ($nom_ph)
    {
       $this-> nom_photo = $nom_ph;
    }
	
	Public function set_type_photo ($type_ph)
    {
       $this-> type_photo = $type_ph;
    }
	/* ---------------------- */
	/* class photo fonctions publiques */
	/* ---------------------- */
	Public function ajout_photo ($objet, $conn)
		{
			$id_ph = $objet->get_id_photo();
			$nom_ph = $objet->get_nom_photo();
			$type_ph = $objet->get_type_photo();
			print $SQL = " INSERT INTO photo values (NULL, '$nom_ph','0')";
			$Req = $conn -> query ($SQL) or die (' Erreur ajout photo ');
		}
		Public function modif_photo ($objet, $conn)
		{
			$id_ph = $objet->get_id_photo();
			$nom_ph = $objet->get_nom_photo();
			$type_ph = $objet->get_type_photo();
			print $SQL = "UPDATE photo SET nom_photo = '$nom_ph',
			WHERE id_photo = '$id_ph'";
			$Req = $conn -> query ($SQL) or die (' Erreur modification photo ');
		}
		Public function affiche_photo ($objet, $conn)
		{
			$id_ph = $objet->get_id_photo();
			$nom_ph = $objet->get_nom_photo();
			$type_ph = $objet->get_type_photo();
			print $SQL = " SELECT *  From photo WHERE id_photo = '$id_ph'";
			$Req = $conn -> query ($SQL) or die (' Erreur affichage photo ');
			Return $Res = $Req -> fetch ();
		}
		Public function suppr_photo ($objet, $conn)
		{
			$id_ph = $objet->get_id_photo();
			$nom_ph = $objet->get_nom_photo();
			$type_ph = $objet->get_type_photo();
			
			print $SQL = " DELETE FROM photo WHERE id_photo = '$id_ph'";
			$Req = $conn -> query ($SQL) or die (' Erreur suppression photo ');
		}
	
		Public function suppr_fictive_photo ($objet, $conn)
		 {
			 $id_ph = $objet->get_id_photo();
			 $nom_ph = $objet->get_nom_photo();
			 $type_ph = $objet->get_type_photo();
			 
			 $SQL = "UPDATE interet SET type_photo = '$type_ph' WHERE id_photo = $id_ph)";
			 $conn -> query ($SQL);
		 }
}
  /* ---------------------- */
  /* FIN class photo */
  /* ---------------------- */
 
?>
