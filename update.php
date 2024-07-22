<?php 

include "connect.php";

try{
    
  if(!isset($_POST['oldid'],$_POST['empid'],$_POST['empname'],$_POST['dept'],$_POST['salary'])){
    echo "data missing"; 
    exit();
  }
  
  $id = $_POST['oldid'];
  $newid = $_POST['empid'];
  $name = $_POST['empname'];
  $dept = $_POST['dept'];
  $salary = $_POST['salary'];
  
  $employee = "SELECT * FROM `employees` WHERE `Id` = $id";

    $query = "UPDATE employee SET Id=:empid, Empname=:empname, Department=:dept, Salary=:salary
    WHERE Id=:oldid";
    
 $stmt = $conn->prepare($query);
 $stmt->bindParam(':oldid',$id);
 $stmt->bindParam(':empid',$newid);
 $stmt->bindParam(':empname',$name);
 $stmt->bindParam(':dept',$dept);
 $stmt->bindParam(':salary', $salary);

 if($stmt->execute()){
     echo "record updated successfully";
 } else{
   
 }
}catch(Exception $e){
  echo $e->getMessage();
}

