<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="jquery.min.js"></script>
    <title>Add Employee</title>
    

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Employee</h1>
        <div class="text-center mt-5">
        <?php  include "operation.php" ?>

        </div>
    <form  class="form">
    <div class="mb-3">
       <label for="empid" class="form-label">Employee Id</label>
       <input type="number" class="form-control" id="empid" name="empid">
      </div>
      <div class="mb-3">
       <label for="empname" class="form-label">Name</label>
       <input type="text" class="form-control" id="empname" name="empname">
      </div>
      <div class="mb-3">
       <label for="dept" class="form-label">Department</label>
       <input type="text" class="form-control" id="dept" name="dept">
      </div>
      <div class="mb-3">
       <label for="salary" class="form-label">Salary</label>
       <input type="number" class="form-control" id="salary" name="salary">
      </div>
      <div class="mb-3">
        <input type="submit" value="Add" id="subtn" class="btn btn-primary">
      </div>
    </form>
    </div>
</body>
</html>

<script>

$(document).ready(function(){
  $('#subtn').on('click',function(e){
    e.preventDefault();
    var id = $("#empid").val();
    var name = $("#empname").val();
    var dept = $("#dept").val();
    var salary = $("#salary").val();
    console.log(id+" "+name+" "+dept+" "+salary);
    $.ajax({
      url:"insert.php",
      type:"POST",
      dataType:"html",
      data:{id,name,dept,salary}
      ,success:function(response){
        alert("record added successfully");
        window.location.href = "employee-list.php";
      },
      error:function(data){
        console.log("AJAX Failed");
        alert("Failed to add record");
      }
    });
  });
  
});
</script>