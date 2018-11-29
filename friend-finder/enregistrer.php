<?php
include "bdd.inc.php";
include "class_utilisateur.php";
include "class_entreprise.php";

  $prenom=$_POST['prenom'];
  $nom=$_POST['nom'];
  $email=$_POST['email'];
  $login=$_POST['ident'];
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
      $unutilisateur = new utilisateur (NULL,$nom,$prenom,'',$email,'','','','',$login,$mdp);

      $unutilisateur -> ajout_utilisateur($unutilisateur, $conn);

      var_dump($unutilisateur);

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
          $uneentreprise = new entreprise (NULL,'', $nom,$prenom,$email,'','','','',$login,$mdp,$act);

          $uneentreprise -> ajout_entreprise($uneentreprise, $conn);

          var_dump($uneentreprise);

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
