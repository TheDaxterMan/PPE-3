<?php
include "bdd.inc.php";

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $ident=$_POST['ident'];
  $mdp=$_POST['mdp'];
  $mdp2=$_POST['mdp2'];
  $radio=$_POST['radio1'];

  if ($radio=="Entreprise")
  {
    $act=$_POST['entreprise'];
  }

if ($mdp!=$mdp2)
{
  echo"<script language=\"javascript\">";
      echo"alert('Vos mots de passe ne sont pas les mêmes, veuillez réessayer !')";
      echo"</script>";
      header('Refresh: 1; URL=./index.php');
}
else
{
  if ($mdp==$mdp2)
  {
    if ($radio=="Elève")
    {
      $sql= "INSERT INTO utilisateur VALUES (NULL,'$nom','$prenom','','$email','','','','','$ident','$mdp')";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      // crée le cookie avec le nom d'utilisateur et la session
      session_start();
      $_SESSION['id'] = $conn -> lastInsertId(); // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
      $_SESSION['photo'] = $res['photo_utilisateur'];
      $_SESSION['profil'] = "eleve";
      header('Location: ./newsfeed.php');
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
          $sql= "INSERT INTO entreprise VALUES (NULL,'','$nom','$prenom','$email','','','','','$ident','$mdp','$act')";
          $req = $conn -> query($sql)or die($conn->errorInfo());
          $req -> execute();
          // crée le cookie avec le nom d'utilisateur et la session
          session_start();
          $_SESSION['id'] =$conn -> lastInsertId();  // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
          $_SESSION['photo'] = $res['photo_entreprise'];
          $_SESSION['profil'] = "entreprise";
          header('Location: ./newsfeed.php');
        }

      }
    }
  }

}
?>
