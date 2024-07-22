<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Form</h1>
    <form action="dataview.php" method="post">
        <p>Student Id <input type="text" name="sid" id="sid"></p>
        <span id="id_error"></span>
        <p>Student Name <input type="text" name="sname" id="sname"></p>
        <span id="name_error"></span>
        <select name="dept" id="dept">
            <option name="se" value="SE">Software</option>
            <option name="nt" value="NT">Network</option>
            <option name="mc" value="MC">Mobile</option>
        </select> <br><br>
        <input type="submit" value="ADD" id="subtn">
    </form>
</body>
</html>

<script>
    
</script>