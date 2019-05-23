<?php
  include "bdd.inc.php";
  include "class_utilisateur.php";

  $old = $_POST['mdp'];
  $new = $_POST['newmdp'];
  $new2 = $_POST['newmdp2'];
  $iduti = $_POST['id'];

  $unutilisateur = new utilisateur ($iduti,'','','','','','','','','','','','');
  $unutilisateur -> select_mdp_utilisateur($unutilisateur, $conn);

  $mdpbase = $unutilisateur -> select_mdp_utilisateur($unutilisateur, $conn)['mdp_utilisateur'];

  if ($old==$mdpbase)
  {
    if ($new==$new2)
    {
      $unutilisateur = new utilisateur ($iduti,'','','','','','','','','',$new,'','');
      $unutilisateur -> new_mdp_utilisateur($unutilisateur, $conn);

    }
    else
    {
      echo "c'est pas bon (new mdp pas les mêmes)";
    }
  }
  else
  {
    echo "c'est pas bon (vieux mdp pas bon)";
  }
  header('Refresh: 0; URL=./edit-profile-password.php');
?>
