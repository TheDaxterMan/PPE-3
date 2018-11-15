<?php

  /* ---------------------- */
  /* DEBUT class Diplome */
  /* ---------------------- */

class diplome
	{
    /* ---------------------- */
    /* class Diplome Variables */
    /* ---------------------- */

		Private $id_diplome;
		Private $nom_diplome;
		Private $lib_diplome;

    /* ---------------------- */
    /* class Diplome Constructeur */
    /* ---------------------- */

    Public function ( $id_dip, $nom_dip, $desc_dip)
    {
      $this -> id_diplome = $id_dip;
      $this -> nom_diplome = $nom_dip;
      $this -> desc_diplome = $desc_dip;
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

    Public function get_desc_diplome ()
    {
      return $this-> desc_diplome;
    }

    /* ---------------------- */
    /* class Diplome SET */
    /* ---------------------- */

    Public function set_id_diplome ($id_dip)
    {
       $this-> id_diplome = $id_dip;
    }

    Public function set_nom_diplome ($nom_dip)
    {
       $this-> nom_diplome = $nom_dip;
    }

    Public function set__desc_diplome ($desc_dip)
    {
       $this-> desc_diplome = $desc_dip;
    }

   }

   /* ---------------------- */
   /* FIN class Diplome */
   /* ---------------------- */

?>
