<?php
include "bdd.inc.php";

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $ident=$_POST['ident'];
  $mdp=$_POST['mdp'];
  $mdp2=$_POST['mdp2'];
  $radio=$_POST['radio'];
  $act=$_POST['entreprise'];

if ($mdp!=$mdp2)
{
  echo"<script language=\"javascript\">";
      echo"alert('Vos mots de passe ne sont pas les mêmes, veuillez réessayer !')";
      echo"</script>";
      header('Refresh: 1; URL=./index.php');
}

if ($mdp==$mdp2)
{
  if ($radio=="Elève")
  {
    $sql= "INSERT INTO utilisateur VALUES (NULL,'$nom','$prenom','','$email','','','','$ident','$mdp')";
    $req = $conn -> query($sql)or die($conn->errorInfo());
  }
  else
  {

    if ($radio=="Entreprise")
    {
      if ($act=="entreprise")
      {
        echo "Veuillez choisir un domaine d'activité";
      }
      else
      {
        $sql= "INSERT INTO entreprise VALUES (NULL,'','$nom','$prenom','$email','','','','$ident','$mdp','$act')";
        $req = $conn -> query($sql)or die($conn->errorInfo());

      }

    }
  }
}

?>
