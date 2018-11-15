<?php
include "bdd.inc.php";

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $ident=$_POST['ident'];
  $mdp=$_POST['mdp'];
  $mdp2=$_POST['mdp2'];

if ($mdp==$mdp2)
{
  $sql= "INSERT INTO utilisateur VALUES (NULL,'$nom','$prenom','-','$email','-','-','-','$ident','$mdp')";
  $req = $conn -> query($sql)or die($conn->errorInfo());

  echo $sql;
}

?>
