<?php 
session_start();

try{
    $pdo = new PDO('mysql:host=localhost:3307;dbname=afyacentre', 'root', '');
}catch (PDOException $e){
    print "Connection ERROR!: " .$e -> getMessage(). "<br/>";
    die();
}


?>