
<?php

$nom_int=$_POST['interet'];

$uninterests = new interests (NULL, $nom_int);

$uninterests -> ajout_interets($uninterests, $conn);

var_dump($uninterests);

?>
