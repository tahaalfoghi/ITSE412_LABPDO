<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="jquery.min.js"></script>

    <title>Delete Page</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Delete Employee</h1>
        <div class="text-center mt-5">
        <?php  include "operation.php" ?>

        </div>
    <form  class="form">
        <div class="mt-3">
            <label for="empname">Employee Id</label>
            <input type="text" name="empid" id="empid" class="form-control">
        </div>
        <div class="mt-3">
            <input type="submit" id="subtn" value="Delete" class="btn btn-danger">
        </div>
    </form>
    <div id="result"></div>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#subtn').on('click', function(e){
            e.preventDefault();
            var id = $("#empid").val();
                console.log(id);
            $.ajax({
                url:"delete.php",
                type:'POST',
                data:{empid:id},
                success: function(){
                    alert("record deleted");
                    window.location.href = "employee-list.php";
                },error:function(){
                    alert("error id not found");
                }
            });
        });
    });
</script>