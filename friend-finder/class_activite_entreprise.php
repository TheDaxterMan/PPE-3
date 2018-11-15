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

  }

  /* ---------------------- */
  /* FIN class Activite_entreprise */
  /* ---------------------- */

?>
