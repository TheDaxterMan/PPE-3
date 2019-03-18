<?php
  include "bdd.inc.php";
  include "class_utilisateur.php";
  $old = $_POST['mdp'];
  $new = $_POST['newmdp'];
  $new2 = $_POST['newmdp2'];
  $iduti = $_POST['id'];

$unutil = new utilisateur ('','','','','','','','','','','','');

$unutil -> affiche_mdp($unutil, $conn);

  $mdpbase = $res['mdp_utilisateur'];

  if ($old==$mdpbase)
  {
    if ($new==$new2)
    {
	    
      /*$sql = "UPDATE utilisateur SET mdp_utilisateur = '$new'
                                     WHERE id_utilisateur = $iduti";

*/      
	$autreutil = new utilisateur ('','','','','','','','','',$new,'', '');

	$autreutil -> modif_old_mpd($autreutil, $conn);
	    
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
