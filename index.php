<?php
session_start() ;
require ('doc/dbconnexion.php');
if(isset($_POST['envoyer'])){

if(!empty($_POST['email']) AND !empty($_POST['password'])){

$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
 $bd =  $connexiondb->prepare('SELECT * FROM users WHERE email = ? AND password1 =?');
 $bd -> execute(array($email,$password));
 if($bd ->rowCount() >0){
    header('Location: doc/products.php');
    $_SESSION['email'] = $email;
   


 }else{
    echo("Votre email ou mot de passe est incorrect");
 }

}else{


    echo("Vous devez completer tous les champs!");
}


}



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
        
        
         
        <form action="" method="post">
            <div class="email">
                
                <input type="email" name="email" id="email" placeholder="Votre email" autocompletion="off">
            </div>
            <div class="password">
               <input type="password" name="password" id="password" placeholder="Votre mot de passe" autocompletion="off">
            </div>
            <div class="buton">
            <input type="submit" name="envoyer" value="connexion">
            </div>
</form>
   </div>
</body>
</html>