<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=subir_foto', 'root', 'jakamoto');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
} catch (PDOException $e){
    die("Error: ".$e->getMessage());
}
?>
