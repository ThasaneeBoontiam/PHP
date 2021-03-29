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

    public function disconnect(){
        $this->dbConn->close();
    }

    public function Show_product(){
        $sql = "SELECT `Product_id`, `Product_code`, `Product_Name`, `Brand_name`, `Unit_name`, `Cost` FROM `product`,`brand`,`unit` WHERE product.Brand_ID =brand.Brand_id AND product.Unit_ID = unit.Unit_id";
        $result = $this->dbConn->query($sql);
        echo "<table border = '1'>";
        $counter = 0;
        while ($row = $result->fetch_assoc()){
            if($counter == 0 ){
                echo "<tr>";
                // foreach($row as $key => $value){
                //     echo "<th>{$key}</th>";
                // }
                echo "<th>ID</th>";
                echo "<th>Product code</th>";
                echo "<th>Product Name</th>";
                echo "<th>Brand</th>";
                echo "<th>Unit</th>";
                echo "<th>Cost</th>";
                echo "<th>SHOPS</th>";
                echo "</tr>";
                $counter++;
            }
            echo "<tr>";
            foreach($row as $key => $value){
                echo "<td>{$value}</td>";
            }
            echo "<td><a href='ProductList.php?productID={row['id']}'>ShopShock</a></td>";
        }
        echo "</table>";
    }

    public function insertData($info){
        $insertQuery = "INSERT INTO `member`(`name`, `user`, `password`, `type`) VALUES ('{$info['name']}','{$info['user']}','{$info['password']}','01')";
        echo $insertQuery;
        $rsInsert = $this->dbConn->Query($insertQuery);
    }

    function varify_user($user,$password){
        $sql ="SELECT count(`member_id`) as n,`name` FROM `member` WHERE `user`='{$user}' and `password`='{$password}'";
        //$sql ="SELECT count(id) as n,id,name,user,type FROM member WHERE name='{$user}' AND password = '{$password}'";
        $result = $this->dbConn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

  
}
?>