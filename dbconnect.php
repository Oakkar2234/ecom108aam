<?php
$server="localhost";
$user="root";
$password= "";
$dsn="mysql:host=$server;dbname=$database";

try{
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(attribute:PDO::ATTR_ERRMODE,value:PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(attribute:PDO::ATTR_DEFAULT_FETCH_MODE, value:PDO::FETCH_OBJ);
    echo"Connection established"
}catch(PDOException $e){
    echo "".$e->getMessage()."";
}