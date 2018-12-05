<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php

  include "bdd.inc.php";

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
    $sql="SELECT * FROM utilisateur
              WHERE login_utilisateur = '$user'
              AND mdp_utilisateur = '$mdp'";

    $req = $conn -> prepare($sql)or die($conn->errorInfo());
    $req -> execute();
    $res=$req->fetch();
    if ($res['login_utilisateur'] == $user || $res['mdp_utilisateur'] == $mdp)
    {
      // crée le cookie avec le nom d'utilisateur et la session
      session_start();
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
//////////////////////////////////////////////////////////////////////////
/*=======================  E N T R E P R I S E  ========================*/
//////////////////////////////////////////////////////////////////////////
  if ($radio=='Entreprise')
  {
    $sql="SELECT * FROM entreprise
              WHERE login_entreprise = '$user'
              AND mdp_entreprise = '$mdp'";

    $req = $conn -> prepare($sql)or die($conn->errorInfo());
    $req -> execute();
    $res=$req->fetch();
    if ($res['login_entreprise'] == $user || $res['mdp_entreprise'] == $mdp)
    {
      // crée le cookie avec le nom d'utilisateur et la session
      session_start();
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
?>
