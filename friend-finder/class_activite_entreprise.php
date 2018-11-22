<?php
  /* ---------------------- */
  /* DEBUT class Activite_entreprise */
  /* ---------------------- */
class activite_entreprise
	{
    /* ---------------------- */
    /* class Activite_entreprise Variables */
    /* ---------------------- */
		Private $id_activite;
    Private $lib_activite;
    /* ---------------------- */
    /* class Activite_entreprise Constructeur */
    /* ---------------------- */
    Public function ( $id_act, $lib_act)
    {
      $this -> id_activite = $id_act;
      $this -> lib_activite = $lib_act;
    }
    /* ---------------------- */
    /* class Activite_entreprise GET */
    /* ---------------------- */
    Public function get_id_activite ()
    {
      return $this-> id_activite;
    }
    Public function get_lib_activite ()
    {
      return $this-> lib_activite;
    }
    /* ---------------------- */
    /* class Activite_entreprise SET */
    /* ---------------------- */
    Public function set_id_activite ($id_act)
    {
       $this-> lib_activite = $id_act;
    }
    Public function set_lib_activite ($lib_act)
    {
       $this-> lib_activite = $lib_act;
    }
		/* ---------------------- */
		/* class Activite_entreprise fonctions publiques */
		/* ---------------------- */
		Public function ajout_activite ($id_act, $lib_act, $conn)
			{
				$SQL = " INSERT INTO values ('NULL', '$lib_act', '$conn')";
				$conn -> query ($SQL);
			}
			Public function modif_activite ($id_act, $lib_act)
			{
				$SQL = "UPDATE activite_entreprise SET id_activite = '$id_act', lib_activite = '$lib_act')";
				$conn -> query ($SQL);
			}
			Public function affiche_activite ($lib_act)
			{
				$SQL = " SELECT * From activite_entreprise WHERE lib_activite = '$lib_act'";
				$Req = $conn -> query ($SQL);
				Return $Res = $Req -> fetch ();
			}
			Public function suppr_activite ($id_act, $lib_act)
			{
				$SQL = " DELETE FROM `activite_entreprise` WHERE lib_activite = '$lib_act'";
				$conn -> query ($SQL);
			}
  }
  /* ---------------------- */
  /* FIN class Activite_entreprise */
  /* ---------------------- */
?>
