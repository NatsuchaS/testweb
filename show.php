<?php
        include_once "db.php";
        $myconn = new Database();
        $myconn->connect();
        $myconn->show_information();
        $myconn->disconnect();
        ?>