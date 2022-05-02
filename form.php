<!DOCTYPE html>
<html lang=fr>    
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width-device-width, initial-scale-1.0, maxinum-scale-1">
        <title>Inscription</title>
        <link rel="stylesheet" media="screen" href="style.css">
    </head>
        <?php
            #call the header
            require_once("header.php");
        ?>
    <body>
        <main>
            <div>
                <h1>Inscription</h1>

                <p class="free">C'est gratuit (et ça le restera toujours)</p>

                <form action="result.php" method="post" class="register">
                    <div>
                        <input type="text"  name="username" placeholder="Prénom" class="inputTwo" >
                        <input type="text"  name="name" placeholder="Nom de famille" class="inputTwo">
                    </div>
                    <div>
                        <input type="text" name="mail" placeholder="Numéro de mobile ou email" class="inputOne" required>
                    </div>
                    <div>
                        <input type="text"  name="mail" placeholder="Confirmer numéro de mobile ou email" class="inputOne" required>
                    </div>
                    <div>
                        <input type="password"  name="pwd" placeholder="Nouveau mot de passe" class="inputOne" required>
                    </div>
                    <div class="one">
                        <p>Date de naissance</p>
                    </div>
                    <div class="ok">
                        <select name="day" class="birth" >
                            <option>jour</option>
                            <?php 
                                for($i= 1; $i<= 31; $i++){
                                    echo "<option>$i</option>";
                                }
                            ?>
                        </select>
                        <select name="month" class="birth">
                            <option>Mois</option>
                            <?php for($i= 1; $i<= 12; $i++){
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="year" class="birth" >
                            <option>Année</option>
                            <?php for($i= 2022; $i>= 1900; $i--){
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>
                        <a target="_blank" href="https://fr-fr.facebook.com/help/563229410363824">Pourquoi indiquez ma date de naissance ?</a>
                    </div>
                    <div class="two">
                        <input  type="radio" name="genre" value="Femme">
                        <label>Femme</label>
                        <input  type="radio" name="genre" value="Homme">
                        <label>Homme</label>
                    </div>
                    <p>En cliquant sur S’inscrire, vous acceptez nos <a target="_blank" href="https://www.facebook.com/legal/terms/update">Conditions</a> et indiquez que vous avez lu notre <a target="_blank" href="https://www.facebook.com/about/privacy/update">Politique d'utilisation des données</a>.
                        Y compris notre <a target="_blank" href="https://www.facebook.com/policies/cookies/">Utilisation des cookies</a>.
                        Vous pourrez recevoir des notifications par texto de la part de Facebook et pouvez vous désabonner à tout moment.
                    </p>
                    <input type="submit" class="button" value="Inscription">
                </form>
            </div>
        </main>
    </body>
</html>