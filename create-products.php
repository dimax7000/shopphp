<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/create-products.css">
    <title>Cration de product</title>
</head>
<body>
    <div class="container">
<form action="create-products.php" method="post">
    <div class="name_products">
        <label for="name">Nom du produits</label>
        <input type="text" name="name" id="name">
   </div>
   <div class="stock">
    <label for="">stock</label><input type="date" name="stock" id="stock">

   </div>
   <div class="price_masse">
    <div class="price">
        <label for="price">Prix</label><input type="number" name="price" id="price">

    </div>
    <div class="mass">
        <label for="poids">Poids</label><input type="number" name="poids" id="poids">

    </div>

   </div>
   <div class="description">
    <label for="description"></label><textarea name="description" id="description"></textarea>


   </div>
   <div class="enr_annu">
    <div class="annu">

    <button >Annuler</button>
    </div>
    <div class="enr">
        <button type="submit">Enregistrer</button>
    </div>

   </div>





</form>
</div>
</body>
</html>