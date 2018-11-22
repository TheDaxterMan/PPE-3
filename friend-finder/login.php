<html>
<head>
  <title>Connexion</title>
</head>
<body>
<?php
$user = $_POST['user'];
$mdp = $_POST['mdp'];
$sql="SELECT * FROM utilisateur
          WHERE login_utilisateur = '$user'
          AND mdp_utilisateur = '$mdp'";

$req = $conn -> prepare($sql)or die($conn->errorInfo());
$req -> execute();
$res=$req->fetch();
if ($res['n_matricule'] == $user || $res['mdp'] == $mdp)
{
// crée le cookie avec le nom d'utilisateur et la session
session_start();
$_SESSION['id_user'] = $res['id_user']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
$_SESSION['permission'] = $res['id_grp']; // pareil pour ses permissions
$_SESSION['matricule'] = $res['n_matricule'];
?>
