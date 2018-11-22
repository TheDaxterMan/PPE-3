<?php
if (!isset($_SESSION['id_user']))
{
  header('Location: ./index.php');
  exit();
}
?>
