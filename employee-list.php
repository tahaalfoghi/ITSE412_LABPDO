

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="jquery.min.js"></script>
    <title>CRUD</title>
    <script>
    $(document).ready(function(){

        $.ajax({
            type:"POST",
            dataType:'html',
            url:'getdata.php',
        }).done(function(response){
            $("#table-content").html(response);
        });
    });
</script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Employee List</h1>
        <?php  include "operation.php" ?>
    <table class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Department</th>
            <th scope="col">Salary</th>
        </tr>
        </tr>
    </thead>
    <tbody id="table-content">
       
    </tbody>
</table>
<div class="container">
    <a href="Main.php" class="btn btn-primary">Back to Home</a>
</div>
    </div>
</body>
</html>

