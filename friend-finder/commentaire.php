<?php
	session_start();
	include "bdd.inc.php";
	include "login.inc.php";
	include "class_stage.php";

	$stage=$_POST['stage'];
	$id=$_SESSION['id'];
	$commentaire=$_POST['commentaire'];

	$uncommentaire = new commentaire ($stage,'','','','',$commentaire,'','',$id,'');
	$uncommentaire -> commentaire_stage($uncommentaire, $conn);

  header('Location: ./newsfeed.php');
?>
