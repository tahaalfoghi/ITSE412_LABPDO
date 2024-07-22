<?php
include "connect.php";

try {
    // Debug: Check if POST data is received
    if (!isset($_POST['id'], $_POST['name'], $_POST['dept'], $_POST['salary'])) {
        echo "Missing data";
        exit;
    }

    $empid = $_POST['id'];
    $empname = $_POST['name'];
    $dept = $_POST['dept'];
    $salary = $_POST['salary'];

    
    $query = "INSERT INTO employee (Id, Empname, Department, Salary) VALUES (:empid, :empname, :dept, :salary)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':empid', $empid);
    $stmt->bindParam(':empname', $empname);
    $stmt->bindParam(':dept', $dept);
    $stmt->bindParam(':salary', $salary);

    if ($stmt->execute()) {
        echo "Record added successfully";
    } else {
        echo "Failed to add record";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
