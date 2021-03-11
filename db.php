
<?php
    define("host","localhost");
    define("user","root");
    define("pass","");
    define("db","bookstore");

    $conn = new mysqli(host,user,pass,db);
    $conn->query("SET NAMES UTF8");
    

    $sql = "SELECT * FROM `book`";
    $result = $conn->query($sql);
    


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
            
        }
        echo "</table>";
        ?>