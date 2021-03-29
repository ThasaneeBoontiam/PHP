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
                  window.location='Register_form.php';
                  </script>";
            exit();
        }
    }else if (isset($_POST['log_name'])){
        $result = $mycon->varify_user($_POST['log_name'],$_POST['log_password']);
        session_start();
        if($result['n']==1){
                $_SESSION['name'] = $result['name'];
                header("location: ProductList.php");
        }else{
            echo "<script>alert('Password Incorrect!')
                   window.location='Login.php'</script>";
            
        }
    }
?>