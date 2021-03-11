<?php
class Database{
    public $conn = null;
    public function connect() //เชื่อมต่อฐานข้อมูล
    {
    define("hostname","localhost");
    define("user","user");
    define("password", "azagP81g5eJxdb7i");
    define("dbname","bookstore");
    $this->conn = new mysqli(hostname, user, password, dbname);
    $this->conn->query("SET NAMES UTF8");
    // Check connection
    if ($this->conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
    }else{
        echo "Connect successgg...";
    }
    }
    
    public function showBook(){
        //แสดงข้อมูลใน table
        $sql = "SELECT * FROM `book`";
        $result = $this->conn->query($sql);
        ///echo "Book Store";
        echo "<table border='1'>";
        $counter = 0;
        while ($row = $result->fetch_assoc()) {
            if ($counter == 0) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<th>{$key}</th>";
                }
                
                echo "</tr>";
                $counter++;
            }
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>{$value}</td>";
            }
            
            echo "</tr>";
        }
        echo "</table>";
    }

    public function disconnect(){
        $this->conn->close();
    }
}
?>

