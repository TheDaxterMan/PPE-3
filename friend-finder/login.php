<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php

  include "bdd.inc.php";

  $util = $_POST['login'];
  $mdp = $_POST['mdp'];
  $radio = $_POST['radio'];
  //echo $util,' ',$mdp,' ',$radio;
  //die();

//////////////////////////////////////////////////////////////////////////
/*===========================  E L E V E  ==============================*/
//////////////////////////////////////////////////////////////////////////
  if ($radio=='Elève')
  {
    include "class_utilisateur.php";

    $unutilisateur = new utilisateur (NULL,'','','','','','','','',$util,$mdp,'','');
    $unutilisateur -> login_utilisateur($unutilisateur, $conn);

    if ($unutilisateur -> login_utilisateur($unutilisateur, $conn)['etat_utilisateur']==1) {
      echo"<script language=\"javascript\">";
      echo"alert('Votre compte est désactivé, veuillez contactez un administrateur pour le débloquer !')";
      echo"</script>";
        header('Refresh: 1; URL=./index.php');
    }
    else {
      if ($unutilisateur -> login_utilisateur($unutilisateur, $conn)['login_utilisateur'] == $util || $unutilisateur -> login_utilisateur($unutilisateur, $conn)['mdp_utilisateur'] == $mdp)
      {
        // crée le cookie avec le nom d'utilisateur et la session
        session_start();
        if ($unutilisateur -> login_utilisateur($unutilisateur, $conn)['id_utilisateur']==1)
        {
          $_SESSION['choix'] = "utilisateur";
        }
        $_SESSION['id'] = $unutilisateur -> login_utilisateur($unutilisateur, $conn)['id_utilisateur']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
        $_SESSION['photo'] = $unutilisateur -> login_utilisateur($unutilisateur, $conn)['photo_utilisateur'];
        $_SESSION['profil'] = "eleve";
        header('Location: ./newsfeed.php');
      }
      else
      {
        echo"<script language=\"javascript\">";
        echo"alert('Votre identifiant où votre mot de passe est incorrect, veuillez réessayer !')";
        echo"</script>";
        header('Refresh: 1; URL=./index.php');
      }
    }
    }

//////////////////////////////////////////////////////////////////////////
/*=======================  E N T R E P R I S E  ========================*/
//////////////////////////////////////////////////////////////////////////
  if ($radio=='Entreprise')
  {
    include "class_entreprise.php";
    $uneentreprise = new entreprise (NULL,'','','','','','','','',$util,$mdp,'','');
    $uneentreprise -> login_entreprise($uneentreprise, $conn);

    if ($uneentreprise -> login_entreprise($uneentreprise, $conn)['etat_entreprise']==1) {
      echo"<script language=\"javascript\">";
      echo"alert('Votre compte est désactivé, veuillez contactez un administrateur pour le débloquer !')";
      echo"</script>";
      header('Refresh: 1; URL=./index.php');
    }
    else {
      if ($uneentreprise -> login_entreprise($uneentreprise, $conn)['login_entreprise'] == $util || $uneentreprise -> login_entreprise($uneentreprise, $conn)['mdp_entreprise'] == $mdp)
      {
      // crée le cookie avec le nom d'utilisateur et la session
      session_start();
      if ($uneentreprise -> login_entreprise($uneentreprise, $conn)['id_entreprise']==1)
      {
        $_SESSION['choix'] = "entreprise";
      }
      $_SESSION['id'] =$uneentreprise -> login_entreprise($uneentreprise, $conn)['id_entreprise']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
      $_SESSION['photo'] = $uneentreprise -> login_entreprise($uneentreprise, $conn)['photo_entreprise'];
      $_SESSION['profil'] = "entreprise";
      header('Location: ./newsfeed.php');
    }

    else {
        echo"<script language=\"javascript\">";
        echo"alert('Votre identifiant où votre mot de passe est incorrect, veuillez réessayer !')";
        echo"</script>";
        header('Refresh: 1; URL=./index.php');
    }
  }
}
?>
