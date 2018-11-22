<<<<<<< HEAD
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

$res = $conn -> prepare($sql)or die($conn->errorInfo());
$res -> execute();
$data=$res->fetch();
if ($data['n_matricule'] == $user || $data['mdp'] == $mdp)
{
// crée le cookie avec le nom d'utilisateur et la session
session_start();
$_SESSION['id_user'] = $data['id_user']; // cette ligne crée une variable de session, où l'on sauve l'id de notre utilisateur connecté
$_SESSION['permission'] = $data['id_grp']; // pareil pour ses permissions
$_SESSION['matricule'] = $data['n_matricule'];
?>
=======
>>>>>>> c21585f11f0b55f74ae88cc273ee384a3dac840a
