<?php 

include "connect.php";

try{

    $query = "SELECT * FROM `employee`";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $tablecontent = "";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $tablecontent.= "<tr>";
        $tablecontent.= "<td>". $row['Id'] ."</td>";
        $tablecontent.= "<td>". $row['Empname'] ."</td>";
        $tablecontent.= "<td>". $row['Department'] ."</td>";
        $tablecontent.= "<td>". $row['Salary'] ."</td>";
        $tablecontent.= "</tr>";
    }
    echo $tablecontent;
}catch(Exception $e){
    echo $e->getMessage();
}

