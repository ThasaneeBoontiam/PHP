<?php
    include_once "Connect.php";
    $mycon = new db();
    $mycon->connect();
    session_start();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align = "right">
    <tr><td>ยินดีต้อนรับ</td></tr>
    <tr><td>คุณ <?php echo $_SESSION['name']?></td></tr>
    </table>
    <center><h1>ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <a href="">|สั่งซื้อสินค้า</a><a href="">|ชำระเงิน</a><a href="Logout.php">|ออกจากระบบ|</a><br>
    <h1>SHOPSHOCK</h1>
    <h2>Select Product to Cart</h2>
    <?php
         $mycon->Show_product();
    ?>
</body>
</html>