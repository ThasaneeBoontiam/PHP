<?php
    define("hostname","localhost");
    define("user","user");
    define("password", "azagP81g5eJxdb7i");
    define("dbname","bookstore");
?>

<?php
    $mysqli = new mysqli(hostname, user, password, dbname);
    $mysqli->query("SET NAMES UTF8");
    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }else{
        echo "Connect successgg...";
    }
    
?>

<?php
        //แสดงข้อมูลใน table
        $sql = "SELECT * FROM `book`";
        $result = $mysqli->query($sql);
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
        ?>