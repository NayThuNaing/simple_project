<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Client</h2>
    <form action="server.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstusername"></td>
            </tr>
            <tr>
                <td>Sectond Name</td>
                <td><input type="text" name="secondusername"></td>
            </tr>
            <tr>
                <td>File</td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Click to Send"e name="save"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>