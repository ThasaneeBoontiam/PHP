<?php
include_once("Connect.php");
$mycon = new db();
$mycon->connect();
    if(isset($_POST['name'])){
     //array data
        $data['name'] = $_POST['name'];
        $data['user'] = $_POST['Nickname'];
        $data['password'] = $_POST['password'];
        $data['password'] = $_POST['Cpassword'];
        $mycon->insertData($data);
        header("location:Login.php");
}
?>