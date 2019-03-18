<?php
include "bdd.inc.php";
$id=$_SESSION['id'];

///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      $sql="SELECT * FROM emploi, entreprise, utilisateur
            WHERE utilisateur.id_utilisateur=$id
            AND emploi.id_utilisateur=utilisateur.id_utilisateur
            AND entreprise.id_entreprise=emploi.id_entreprise
            ORDER BY date_crea DESC";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      
    }

?>
