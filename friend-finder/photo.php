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
    $chemin = "./images/users";
    $pj = $chemin . "/" .$nomphoto.$type;

    move_uploaded_file($tmpphoto,$pj);

    $sql = "UPDATE utilisateur SET photo_utilisateur = '$type'
                                   WHERE id_utilisateur = $id";
    $req = $conn -> prepare($sql);
    $req -> execute();

    $_SESSION['photo'] = $type;
  }
  header('Location: ./timeline.php');
?>
