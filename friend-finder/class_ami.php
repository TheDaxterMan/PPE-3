<?php

  /* ---------------------- */
  /* DEBUT class Ami */
  /* ---------------------- */

class ami
	{
    /* ---------------------- */
    /* class Ami Variables */
    /* ---------------------- */

		Private $id_utilisateur;
		Private $id_utilisateur_ami;

    /* ---------------------- */
    /* class Ami Constructeur */
    /* ---------------------- */


    Public function ( $id_util, $id_util_ami)
    {
      $this -> id_utilisateur = $id_util;
      $this -> id_utilisateur_ami = $id_util_ami;
    }

    /* ---------------------- */
    /* class Ami GET */
    /* ---------------------- */

    Public function get_id_utilisateur ()
    {
      return $this-> id_utilisateur;
    }

    Public function get_id_utilisateur_ami ()
    {
      return $this-> id_utilisateur_ami;
    }

    /* ---------------------- */
    /* class Ami SET */
    /* ---------------------- */

    Public function set_id_utilisateur ($id_util)
    {
       $this-> id_utilisateur = $id_util;
    }

    Public function set_id_utilisateur_ami ($id_util_ami)
    {
       $this-> id_utilisateur_ami = $id_util_ami;
    }

   }

   /* ---------------------- */
   /* FIN class Ami */
   /* ---------------------- */

?>
