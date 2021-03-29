<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><Table>
        <h2>SHOPSHOCK</h2>
        <h3>กรุณากรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h3>
        <form action = "handle.php" method = "post">
        <tr><td align = 'right'>Username : </td><td><input type="text" name="log_name" id="" required></td><tr>
        <tr><td align = 'right'>Password : </td><td><input type="password" name="log_password" id="" required></td><tr>
        <tr><td></td>
            <td><center><button type="submit">submit</button>
                <button type="reset">reset</button></td></tr>
        </form>
    </Table>
</body>
</html>