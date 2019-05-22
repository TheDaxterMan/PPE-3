<?php
include "bdd.inc.php";
$id=$_SESSION['id'];

///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      $unutilisateur = new utilisateur ($id,'','','','','','','','','');
      $unutilisateur -> exp_pro($unutilisateur, $conn);

    }

?>
