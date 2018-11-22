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

//////////////////////////////////////////////////////////////////////////
/*                  E L E V E                                           */
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
      //$_SESSION['login_utilisateur'] = $res['login_utilisateur'];
      header('Location: ./newsfeed.php');
    }
    else
    {
      header('Location: ./index.php');
    }
  }
//////////////////////////////////////////////////////////////////////////
/*                  E N T R E P R I S E                                 */
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
      //$_SESSION['login_entreprise'] = $res['login_entreprise'];
      header('Location: ./newsfeed.php');
    }
    else
    {
      header('Location: ./index.php');
    }
  }
?>
