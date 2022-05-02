<!DOCTYPE html>
<html lang=fr>    
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width, initial-scale-1.0, maxinum-scale-1">
        <title>Ajout Utilisateur</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>
    <?php
        #call the header
        require_once("header.php");
    ?>
    <body>
        <?php
            #Connection to DB and call the function
            require_once("connect.php");
            require_once("function.php");
            ajoutUtilisateur();
        ?>
    </body>