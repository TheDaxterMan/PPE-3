<?php

include "bdd.inc.php";

// S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {

  // (1) Code PHP pour traiter l'envoi de l'email

  // Récupération des variables et sécurisation des données

  $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $email = htmlentities($_POST['email']);
  $telephone = htmlentities($_POST['phone']);
  $message = htmlentities($_POST['message']);

  // Variables concernant l'email

  $destinataire = 'virlouvet.maxime@gmail.com';
  $sujet = 'Titre du message';
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$telephone.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
  // (2) Fin du code pour traiter l'envoi de l'email
}
?>
