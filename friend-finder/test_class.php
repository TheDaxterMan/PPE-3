<?php
include 'class_utilisateur.php';
include 'bdd.inc.php';

$unutilisateur = new utilisateur (NULL, 'fzearf', 'mfzefarc',  054561546540, 'qzefafezzzef@zefaaezza.com', '83 rezefuzef ezfjpz', 'vzezoahfaefzz zfjozjeczgrgpi',  6154654, 'photo', 'rezfoot',  12354456789);

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

/*$unutilisateur-> suppr_utilisateur($unutilisateur,$conn);*/
?>
