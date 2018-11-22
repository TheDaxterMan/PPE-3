<?php
if (!isset($_SESSION['id_utilisateur']))
{
  header('Location: ./index.php');
  exit();
}
?>
