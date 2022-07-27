
<?php
try {
    $connexiondb = new PDO(
        'mysql:host=localhost;dbname=shop',
        'root',
        'root'
    );
} catch(Exception $e) {
    die('error :'. $e->getMessage());


}

?>