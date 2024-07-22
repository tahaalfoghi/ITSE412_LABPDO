<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['sid']?></td>
                <td><?php echo $_POST['sname'] ?></td>
                <td><?php echo $_POST['dept'] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>