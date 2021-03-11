<?php
    include "db.php";
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