<?php
        include_once "db.php";
        $myconn = new Database();
        $myconn->connect();
        $myconn->showBook();
        $myconn->disconnect();
        ?>