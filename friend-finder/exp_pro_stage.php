<?php
include "bdd.inc.php";
/*include "class_stage.php';*/
$id=$_SESSION['id'];

    ///////////////////////////////////////////////////////////////////////////////
    /*									        	E L E V E																			 */
    ///////////////////////////////////////////////////////////////////////////////
        if ($_SESSION['profil']=="eleve")
        {
            /*$unstage = new stage ('','','','','','','')
              
            $unstage -> affiche_stage($unstage, $conn)  */
         
          $libs=$res['lib_stage'];
          $descs=$res['desc_stage'];
          $dated=date("d-m-Y", strtotime($res['date_debut_stage']));
          $datef=date("d-m-Y", strtotime($res['date_fin_stage']));
          $commentaire=$res['commentaire'];
          $entreprise=$res['id_entreprise'];
          $filiere=$res['id_filiere'];
        }

?>
