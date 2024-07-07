<?php
$host = "localhost";
$db = "etkmxngs_database";
$charset = "utf8";
$username = "etkmxngs_users";
$password = "bonna@12345!";
try{
$db = new PDO("mysql:host=".$host."; dbname=".$db."; charset=".$charset, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(exception $ex){
die("Error : " . $ex->getMessage());
}
?>