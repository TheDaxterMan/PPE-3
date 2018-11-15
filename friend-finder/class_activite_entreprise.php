<?php

/* DEBUT class activite_entreprise */

class activite_entreprise
	{

		/* class Entreprise Variables */

		Private $id_activite;
    Private $lib_activite;

    /* class Entreprise Constructeur */

    Public function  ( $id_act, $lib_act)
    {
      $this -> id_activite = $id_act;
      $this -> lib_activite = $lib_act;
    }

    /* class Entreprise GET */

    Public function get_id_activite ()
    {
      return $this-> id_activite;
    }

    Public function get_lib_activite ()
    {
      return $this-> lib_activite;
    }

    /* class Entreprise SET */

    Public function set_id_lib_activite ($id_act)
    {
       $this-> lib_activite = $id_act;
    }

    Public function set_id_ ($lib_act)
    {
       $this-> lib_activite = $lib_act;
    }
  }
