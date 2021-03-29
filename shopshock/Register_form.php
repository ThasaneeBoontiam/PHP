<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<center><Table >
    ShopShock Member Register
    <form action = "handle.php" method="post">
        <tr><td colspan= 2 >________________________________________<td><tr>
        <tr><td align = 'right'>Name : </td><td><input type="text" name="name"  required></td><tr>
        <tr><td align = 'right'>NickName : </td><td><input type="text" name="Nickname"  required></td><tr>
        <tr><td align = 'right'>Password : </td><td><input type="password" name="password"  required></td><tr>
        <tr><td align = 'right'>Confirm Password : </td><td><input type="password" name="Cpassword"  required></td><tr>
        <tr><td colspan= 2 >________________________________________<td><tr>
        <tr><td colspan= 2><center><button type="submit">submit</button>
                <button type="reset">reset</button></td></tr>
    </form>
    </Table>
</body>
</html>