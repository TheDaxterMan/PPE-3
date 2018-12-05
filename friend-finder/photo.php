<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";

  $id = $_SESSION['id'];

  $nphoto = $_FILES['photo']['name'];
  $tphoto = $_FILES['photo']['type'];
  $sphoto = $_FILES['photo']['size'];
  $tmpphoto = $_FILES['photo']['tmp_name'];
  $ephoto = $_FILES['photo']['error'];

  if ($ephoto != 0)
  {

  }
  else
  {

    $nomphoto='user-'.$id;
    $type = ".".pathinfo($nphoto, PATHINFO_EXTENSION);
///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
		if ($_SESSION['profil']=="eleve")
		{
			$chemin = "./images/users/utilisateur";
			$pj = $chemin . "/" .$nomphoto.$type;

			move_uploaded_file($tmpphoto,$pj);

			$sql = "UPDATE utilisateur SET photo_utilisateur = '$type'
	                                   WHERE id_utilisateur = $id";
	    $req = $conn -> prepare($sql);
	    $req -> execute();
		}
///////////////////////////////////////////////////////////////////////////////
/*												E N T R E P R I S E																*/
///////////////////////////////////////////////////////////////////////////////
		if ($_SESSION['profil']=="entreprise")
		{
			$chemin = "./images/users/entreprise";
			$pj = $chemin . "/" .$nomphoto.$type;

			move_uploaded_file($tmpphoto,$pj);

			$sql = "UPDATE entreprise SET photo_entreprise = '$type'
	                                   WHERE id_entreprise = $id";
	    $req = $conn -> prepare($sql);
	    $req -> execute();
		}

    $_SESSION['photo'] = $type;
  }
  header('Location: ./timeline.php');
?>
