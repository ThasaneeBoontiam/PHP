<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <Table>
        <h2>SHOPSHOCK</h2>
        <h3>กรุณากรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h3>
        <form action = "handle.php" method = "post">
        <tr><td>Username : </td><td><input type="text" name="name" id="" required></td><tr>
        <tr><td>Password : </td><td><input type="password" name="password" id="" required></td><tr>
        <tr><td></td>
            <td><center><button type="submit">submit</button>
                <button type="reset">reset</button></td></tr>
        </form>
    </Table>
</body>
</html>