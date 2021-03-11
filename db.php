
<?php
class Database
    {
    public $conn = null;
    public function connect(){
    define("host","localhost");
    define("user","root");
    define("pass","");
    define("db","bookstore");
    $this->conn = new mysqli(host, user, pass, db);
    $this->conn->query("SET NAMES UTF8");
    }


    public function disconnect() //ตัดการเชื่อมต่อฐานข้อมูล
    {
        $this->conn->close();
    }
    public function show_information() //แสดงข้อมูลทั้งหมดใน table
    {
    $sql = "SELECT * FROM `book`";
    $result = $this->conn->query($sql);
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
    }
}