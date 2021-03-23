<?php
class db{
    public  $dbConn = null;
    public function Connect(){
        define("host","localhost");
        define("username","root");
        define("password","");
        define("database","shopshock");
        $this->dbConn = new mysqli(host,username,password,database);
        if ($this->dbConn->connect_error)
            die("Database Connection Error".$this->dbConn->connect_erron."|".$this->dbConn->connect->connect_error);
        $this->dbConn->query("SET NAMES UTF8");
    }

    public function insertData($info){
        $insertQuery = "INSERT INTO `member`(`name`, `user`, `password`, `type`) VALUES ('{$info['name']}','{$info['user']}','{$info['password']}','{$info['type']}')";
        echo $insertQuery;
        $rsInsert = $this->dbConn->Query($insertQuery);
    }

    function varify_user($user,$password){
        $sql ="SELECT"
    }
}
?>