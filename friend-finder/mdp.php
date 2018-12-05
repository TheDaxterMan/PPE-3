<?php
  include "bdd.inc.php";

  $old = $_POST['mdp'];
  $new = $_POST['newmdp'];
  $new2 = $_POST['newmdp2'];
  $iduti = $_POST['id'];

  $sql="SELECT mdp_utilisateur FROM utilisateur";
	$req = $conn -> query($sql)or die($conn->errorInfo());
	$res=$req->fetch();

  $mdpbase = $res['mdp_utilisateur'];

  if ($old==$mdpbase)
  {
    if ($new==$new2)
    {
      $sql = "UPDATE utilisateur SET mdp_utilisateur = '$new'
                                     WHERE id_utilisateur = $iduti";
      $req = $conn -> prepare($sql);
      $req -> execute();
      
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
?>
