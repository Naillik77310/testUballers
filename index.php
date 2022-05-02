<?php
require_once 'function.php';
  // On récupère la session
  session_start ();
  // On teste pour voir si nos variables de session ont bien été enregistrées
  if (isset($_SESSION['mail'])) {
  echo "<p style=text-align:right;>Bienvenue ".strtoupper($_SESSION['mail']);
  echo '<br><a href="./logout.php">Deconnexion</a></p>';
  }
  else
  header ('location: form.php'); 
  ?>
<!DOCTYPE html>
<html lang=fr>    
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width, initial-scale-1.0, maxinum-scale-1">
        <title>Finis</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>
