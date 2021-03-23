<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <Table >
    <form action = "handle.php" method="post">
        <!--tr><td>________________________________________</td><tr-->
        <tr><td>Name : </td><td><input type="text" name="name"  required></td><tr>
        <tr><td>NickName : </td><td><input type="text" name="Nickname"  required></td><tr>
        <tr><td>Password : </td><td><input type="password" name="password"  required></td><tr>
        <tr><td>Confirm Password : </td><td><input type="password" name="Cpassword"  required></td><tr>
        <!--tr><td>________________________________________</td><tr-->
        <tr><td><center><button type="submit">submit</button></td><td>
                <button type="reset">reset</button></td></tr>
    </form>
    </Table>
</body>
</html>