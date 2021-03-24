<?php
include_once("Connect.php");
$mycon = new db();
$mycon->connect();
    if(isset($_POST['name'])){
        if($_POST['password']==$_POST['Cpassword']){
            $data['name'] = $_POST['name'];
            $data['user'] = $_POST['Nickname'];
            $data['password'] = $_POST['password'];
            $data['password'] = $_POST['Cpassword'];
            $mycon->insertData($data);
            header("location:Login.php");
        }else{
            echo "<script>alert('Password Incorrect!');
                  window.location='Register_form.php';</script>";
            exit();
        }
    }else if (isset($_POST['log_name'])){
        $result = $mycon->varify_user($_POST['name'],$_POST['password']);
        session_start();
        if($result['n']==1){
            if($result['type']=='user'){
                $_SESSION['member_id'] = $result['member_id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['Nickname'] = $result['Nickname'];
                // $_SESSION['Nickname'] = $result['Nickname'];
                header("location: ProductList.php");
            }else{
                $_SESSION['member_id'] = $result['member_id'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['Nickname'] = $result['Nickname'];
                header("location: ProductList.php");
            }
        }else{
            echo "Password Incorrect!";
        }
    }
?>