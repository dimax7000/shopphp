<?php
session_start();
require 'function/verifierConnexion.php';
if(!est_connecter()){
    header(Location: login.php);
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/produit.css">
    <title>Liste des produits</title>
</head>
<body>
    <div class="container">
        <div class="container">





        </div>

  </div>
    
</body>
</html>