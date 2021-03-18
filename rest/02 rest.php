<?php
    include_once "01 db.php";
    include_once "util.php";
    $debug_mode = false;

    if($_SERVER['REQUEST_METHOD']=='GET'){
        debug_text("GET METHOD Process...",$debug_mode);
        echo json_encode(show_data($debug_mode));
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        debug_text("May be implement soon...",$debug_mode);
        $message = array("status"=>print_r($_POST));
        echo json_encode($message);
    }else{
        debug_text("Error this site Unsupport This request",$debug_mode);
        http_response_code(405);
    }

    function show_data($debug_mode){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("select * from person");
        //print_r($data);
        $mydb->close();
        return $data;
    }

    function add_data($debug_mode,$data){
        $mydb = new db("root","","personal",$debug_mode);
        $data = $mydb->query("INSERT INTO `person`(`name`, `age`) VALUES ('{$data['u_name']}','{$data['u_age']}')");
        $mydb->close();
    }
?>