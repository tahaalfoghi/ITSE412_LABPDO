<?php 


$server = "mysql:host=localhost; dbname=companydb";
$user ="root";
$password ="";

try{
    $conn = new PDO($server, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if($conn){
        echo "";
    }
}catch(PDOException $e){

    echo $e->getMessage();
}

