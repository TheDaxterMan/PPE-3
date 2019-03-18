<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php

  include "bdd.inc.php";
  include "class_utilisateur.php";
  include "class_entreprise.php";

  $user = $_POST['login'];
  $mdp = $_POST['mdp'];
  $radio = $_POST['radio'];
  //echo $user,' ',$mdp,' ',$radio;
  //die();

//////////////////////////////////////////////////////////////////////////
/*===========================  E L E V E  ==============================*/
//////////////////////////////////////////////////////////////////////////
  if ($radio=='Elève')
  {
    $unutil = new utilisateur ('','','','','','','','','','','','');
    
    $unutil -> affiche_utilisateur_total_login($unutil, $conn);
    
    
    if ($res['etat_utilisateur']==1) {
      echo"<script language=\"javascript\">";
      echo"alert('Votre compte est désactivé, veuillez contactez un administrateur pour le débloquer !')";
      echo"</script>";
        header('Refresh: 1; URL=./index.php');
    }
    else {
      if ($res['login_utilisateur'] == $user || $res['mdp_utilisateur'] == $mdp)
      {
        // crée le cookie avec le nom d'utilisateur et la session
        session_start();
        if ($res['id_utilisateur']==1)
        {
          $_SESSION['choix'] = "utilisateur";
        }
        $_SESSION['id'] = $res['id_utilisateur']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
        $_SESSION['photo'] = $res['photo_utilisateur'];
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
    $uneent = new entreprise ('','','','','','','','','','','','');
    
    $uneent -> affiche_entreprise_login($uneent, $conn);
    
    $req = $conn -> prepare($sql)or die($conn->errorInfo());
    $req -> execute();
    $res=$req->fetch();
    if ($res['etat_entreprise']==1) {
      echo"<script language=\"javascript\">";
      echo"alert('Votre compte est désactivé, veuillez contactez un administrateur pour le débloquer !')";
      echo"</script>";
      header('Refresh: 1; URL=./index.php');
    }
    else {
      if ($res['login_entreprise'] == $user || $res['mdp_entreprise'] == $mdp)
      {
      // crée le cookie avec le nom d'utilisateur et la session
      session_start();
      if ($res['id_entreprise']==1)
      {
        $_SESSION['choix'] = "entreprise";
      }
      $_SESSION['id'] = $res['id_entreprise']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
      $_SESSION['photo'] = $res['photo_entreprise'];
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
