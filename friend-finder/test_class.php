<?php


include 'class_utilisateur.php';
include 'bdd.inc.php';

echo "Bonjour";
/*
	  $unutilisateur = new utilisateur (NULL, 'nomufrzfetil', 'prenomurftil',  0545544561546540, 'mairfefelf@zefaaezza.com', 'rueutferfil', 'villerfreeeutil', 6154489464, 'photofrerfutil', 'loginzerezutil', 'mdpfzef',0 ,'');

      $unutilisateur -> ajout_utilisateur($unutilisateur, $conn);

      var_dump($unutilisateur);

	  echo"test fait ! ";*/
	  
	  $unutilisateur = new utilisateur('','','','','','','','','','','','','');
	  
	 $unutilisateur ->suppr_fictive($unutilisateur, $conn);
	  
	  var_dump($unutilisateur);
	  
	  
/*include 'class_entreprise.php';

$unutilisateur = new utilisateur (NULL, 'nomutil', 'prenomutil',  054561546540, 'mailf@zefaaezza.com', 'rueutil', 'villeutil', 615464, 'photoutil', 'loginutil',  1235456789);
$uneentreprise = new entreprise (NULL, 'noment', 'nomresp',  'prenomresp', 'mail@zefaaezza.com', 'rueutil', 'villeent',  6154654, 'photoent', 'loginent',  12354456789, 1);

var_dump($unutilisateur->getallutil());

 $unutilisateur -> ajout_utilisateur($unutilisateur,$conn);
?>

<br><br><br>

<?php
$unutilisateur -> affiche_utilisateur($unutilisateur,$conn);
?>

<br><br>

<?php
echo $unutilisateur->getallutil();
?>

<br><br>

<?php
$unutilisateur -> modif_utilisateur($unutilisateur,$conn);
?>

<br><br>

<?php
echo $unutilisateur->getallutil();
?>

<br><br>

<?php

$unutilisateur-> suppr_utilisateur($unutilisateur,$conn);

$uneentreprise = new entreprise (NULL, 'noment', 'nomresp',  'prenomresp', 'mail@zefaaezza.com', 'rueent', 'villeent',  6154654, 'photoent', 'loginent',  12354456789);

$uneentreprise -> ajout_entreprise($uneentreprise,$conn);
?>

<br><br>

<?php
$uneentreprise -> affiche_entreprise($uneentreprise,$conn);
?>

<br><br>

<?php
$uneentreprise -> modif_entreprise($uneentreprise,$conn);
?>

<br><br>

<?php
$uneentreprise -> suppr_entreprise($uneentreprise,$conn);

?>
*/
