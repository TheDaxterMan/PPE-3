<?php

  /* ---------------------- */
  /* DEBUT class Emploi */
  /* ---------------------- */

class emploi
	{
    /* ---------------------- */
    /* class Emploi Variables */
    /* ---------------------- */

		Private $id_emploi;
    Private $lib_emploi;
    Private $desc_emploi;

    /* ---------------------- */
    /* class Emploi Constructeur */
    /* ---------------------- */

    Public function ( $id_emp, $lib_emp, $desc_emp)
    {
      $this -> id_emploi = $id_emp;
      $this -> lib_emploi = $lib_emp;
      $this -> desc_emploi = $desc_emp;
    }

    /* ---------------------- */
    /* class Emploi GET */
    /* ---------------------- */

    Public function get_id_emploi ()
    {
      return $this-> id_emploi;
    }

    Public function get_lib_emploi ()
    {
      return $this-> lib_emploi;
    }

    Public function get_desc_emploi ()
    {
      return $this-> desc_emploi;
    }

    /* ---------------------- */
    /* class Emploi SET */
    /* ---------------------- */

    Public function set_id_emploi ($id_emp)
    {
       $this-> id_emploi = $id_emp;
    }

    Public function set_lib_emploi ($lib_emp)
    {
       $this-> lib_emploi = $lib_emp;
    }

    Public function set__desc_emploi ($desc_emp)
    {
       $this-> desc_emploi = $desc_emp;
    }

  }

  /* ---------------------- */
  /* FIN class Emploi */
  /* ---------------------- */

?>
