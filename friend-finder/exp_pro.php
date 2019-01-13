<?php
include "bdd.inc.php";
$id=$_SESSION['id'];
///////////////////////////////////////////////////////////////////////////////
/*									        	E L E V E																			 */
///////////////////////////////////////////////////////////////////////////////
    if ($_SESSION['profil']=="eleve")
    {
      $sql="SELECT * FROM emploi
            WHERE id_utilisateur=$id";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      $lib=$res['lib_emploi'];
      $desc=$res['desc_emploi'];
      $date=date("d-m-Y", strtotime($res['date_crea']));
      $entreprise=$res['id_entreprise'];
      $filiere=$res['id_filiere'];
    }
///////////////////////////////////////////////////////////////////////////////
/*												E N T R E P R I S E																*/
///////////////////////////////////////////////////////////////////////////////
    /*
    if ($_SESSION['profil']=="entreprise")
    {
      $sql="SELECT * FROM emploi
            WHERE id_entreprise=$id";
      $req = $conn -> query($sql)or die($conn->errorInfo());
      $req -> execute();
      $res=$req->fetch();
      $lib=$res['lib_emploi'];
      $desc=$res['desc_emploi'];
      $date=date("d-m-Y", strtotime($res['date_crea']));
      $utilisateur=$res['id_utilisateur'];
      $filiere=$res['id_filiere'];
    }
    */

    ///////////////////////////////////////////////////////////////////////////////
    /*									        	E L E V E																			 */
    ///////////////////////////////////////////////////////////////////////////////
        if ($_SESSION['profil']=="eleve")
        {
          $sql="SELECT * FROM stage
                WHERE id_utilisateur=$id";
          $req = $conn -> query($sql)or die($conn->errorInfo());
          $req -> execute();
          $res=$req->fetch();
          $libs=$res['lib_stage'];
          $descs=$res['desc_stage'];
          $dated=date("d-m-Y", strtotime($res['date_debut_stage']));
          $datef=date("d-m-Y", strtotime($res['date_fin_stage']));
          $commentaire=$res['commentaire'];
          $entreprise=$res['id_entreprise'];
          $filiere=$res['id_filiere'];
        }
    ///////////////////////////////////////////////////////////////////////////////
    /*												E N T R E P R I S E																*/
    ///////////////////////////////////////////////////////////////////////////////
        /*
        if ($_SESSION['profil']=="entreprise")
        {
          $sql="SELECT * FROM stage
                WHERE id_entreprise=$id";
          $req = $conn -> query($sql)or die($conn->errorInfo());
          $req -> execute();
          $res=$req->fetch();
          $libs=$res['lib_stage'];
          $descs=$res['desc_stage'];
          $dated=date("d-m-Y", strtotime($res['date_debut_stage']));
          $datef=date("d-m-Y", strtotime($res['date_fin_stage']));
          $commentaire=$res['commentaire'];
          $utilisateur=$res['id_utilisateur'];
          $filiere=$res['id_filiere'];
        }
        */
?>
