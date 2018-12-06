<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";

	$stage=$_POST['stage'];
	$id=$_SESSION['id'];
	$commentaire=$_POST['commentaire'];

  $sql = "UPDATE stage SET commentaire = '$commentaire',
													 id_utilisateur = '$id'
                        WHERE id_stage = $stage";
  $req = $conn -> prepare($sql);
  $req -> execute();

  header('Location: ./newsfeed.php');
?>
