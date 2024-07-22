<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="jquery.min.js"></script>
    <title>Edit Employee</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Employee</h1>
        <div class="text-center mt-5">
        <?php  include "operation.php" ?>
        
        </div>
    <form class="form">
        <div class="mb-3">
            <label for="oldid" >Id</label>
            <input type="number" class="form-control" name="oldid" id="oldid">
        </div>
      <div class="mb-3">
       <label for="empid" class="form-label">New Id</label>
       <input type="number" class="form-control" id="empid" name="empid">
      </div>
      <div class="mt-3">
        <label for="empname">New Name</label>
        <input type="text" name="empname" id="empname" class="form-control">
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
        <input type="submit" id="subtn" class="btn btn-primary">
      </div>
    </form>
    </div>
</body>
</html>

<script>

  $(document).ready(function(e){
    
      $("#subtn").on('click',function(e){
        e.preventDefault();
            var empid = $('#empid').val();
            var empname = $('#empname').val();
            var dept = $('#dept').val();
            var salary = $('#salary').val();
            var oldid = $('#oldid').val();

            console.log(empid+" "+empname+" "+dept+" "+salary+" "+oldid);

    $.ajax({
      url:"update.php",
      type:'POST',
      dataType:'html',
      data:{oldid: oldid,
                        empid: empid,
                        empname: empname,
                        dept: dept,
                        salary: salary},
      success:function(response){
        alert(response);
        window.location.href= "employee-list.php";
      },
      error:function(response){
        alert(response);
      }
    });
      });
  });
</script>