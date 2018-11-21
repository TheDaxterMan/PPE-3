<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php

  //On fais la connexion à la base de données\\
  if (isset ($_POST['submit']))
    $sbh=new mysqli ("localhost", "root", "", "viabahuet");
    //recupération des données de la base //
    $nom=$_POST['login'];
    $mdp=$_POST['mdp'];
  //requete sql qui permet d'enregistré dans la base de données//
  $requete=$dbh->query("SELECT login,mdp FROM utilisateur
                        WHERE login='$nom'
                        AND mdp='$mdp';");
//On vérifie que le si les conditions sont respectés//
  //$result=$requete->fetch();
    //if(!$result){
      //echo "Votre pseudo ou votre mot de passe est incorrect.";
    //header('Refresh: 5; URL=../login.html'); // rafraîchit la page au bout 5 de secondes //
  }
    else{
      // si le pseudo/mdp correct //
      session_start(); // on démarre la session //
      $_SESSION['id']=$result['id']; // on vérifie que l'id de la base est équivalent à l'id qu'on à reçu //
      $_SESSION['login']=$result['login']; // on vérifie que le pseudo de la base est équivalent à l'id qu'on à reçu //
      echo "Pseudo : ",$_SESSION['login'],"<br> ID : ",$_SESSION['id'];
      echo "<br><br> Vous êtes connecté.";
      echo "<br> Vous allez être redigé vers la page d'acceuil.";
      header('Refresh: 4; URL=../Site_Cybernet.html');
  }
?>
