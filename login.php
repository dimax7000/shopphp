<?php
session_start();
$email = $_POST["email"];
$_SESSION['users'] = $email;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/login.css">
    <title>Page de connexion</title>
</head>
<body>
    <div class="container">
        <h1>Formulaire de connexion</h1>
        <div class="messagError">
            <?php

            
            ?>
        </div>
        <form action="products.php" method="post">
            <div class="email">
                
                <input type="email" name="email" id="email" placeholder="Votre email">
            </div>
            <div class="password">
               <input type="password" name="password" id="password" placeholder="Votre mot de passe">
            </div>
            <div class="buton">
                <button type="submit">Se connecter</button>
            </div>
</form>
   </div>
</body>
</html>