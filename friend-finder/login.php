<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php

  include "bdd.inc.php";

  $user = $_POST['login'];
  $mdp = $_POST['mdp'];

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
    $_SESSION['id_utilisateur'] = $res['id_utilisateur']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
    //$_SESSION['login_utilisateur'] = $res['login_utilisateur'];
    header('Location: ./newsfeed.php');
  }
  else
  {
    header('Location: ./index.php');
  }
?>
