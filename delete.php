<?php 

include "connect.php";

try{

    if(!isset($_POST['empid'])){
        echo "missing data";
        exit();
    }
    
    $empid = $_POST['empid'];
    $query = "DELETE FROM `employee` WHERE `Id`=:empid";
    $stmt =$conn->prepare($query);
    $stmt->bindParam(':empid',$empid);
    
    if($stmt->execute()){

    }else{
        echo "Error the employee id". $_POST['empid']." is not found";
    }
}catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

?>