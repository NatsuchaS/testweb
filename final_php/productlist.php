<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align='center'>
<?php
        include_once "class.db.php";
        session_start();
        $myconn = new Database();
        $myconn->connect();
        ?>
<h4 align='right'>Welcome <?php echo $_SESSION['user']?></h4>
<h1> ยินดีต้อนรับเข้าสู่เมนูลูกค้า </h1>
|สั่งซื้อสินค้า| ชำระเงิน| ออกจากระบบ|
<h2> SHOPSHOCK </h2>
<h3> Select Product to Cart</h3>

    
</body>
</html>