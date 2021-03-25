<?php
class Database
{
    public $dbConn = null;
    public function connect() 
    {
        define("host", "localhost");
        define("username", "root");
        define("password", "");
        define("database", "shopshock");
        $this->dbConn = new mysqli(host, username, password, database);
        if ($this->dbConn->connect_error) 
            die("Database Connection Error,Error No.:" .
                $this->dbConn->connect_errno . " | " . $this->dbConn->connect->connect_error);
        $this->dbConn->query("SET NAMES UTF8");
        
    }
    public function disconnect() 
    {
        $this->dbConn->close();
    }
    public function insertData($info)
    {
        $insertQuery = "INSERT INTO `member` ( `name`, `user`, `password`, `type`) VALUES ('{$info['username']}','{$info['NickName']}',MD5('{$info['password']}'),'01')";
        echo $insertQuery;
        $rsInsert = $this->dbConn->Query($insertQuery);

    }
    function varify_user($user, $pass) //ล็อกอิน
    {
        $sql = "SELECT count(member_id) as n,user FROM member WHERE user = '{$user}' AND password = md5('{$pass}')";
        $result = $this->dbConn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    public function show_information() //แสดงข้อมูลทั้งหมดใน table
    {
        $sql = "SELECT * FROM `login`";
        $result = $this->dbConn->query($sql);
        echo "<table border='1'>";
        $counter = 0;
        while ($row = $result->fetch_assoc()) {
            if ($counter == 0) {
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<th>{$key}</th>";
                }
                echo "<th>Edit</th>";
                echo "<th>delete</th>";
                echo "</tr>";
                $counter++;
            }
            echo "<tr>";
            foreach ($row as $key => $value) {
                echo "<td>{$value}</td>";
            }
            echo "<td><a href='formEdit.php?cusId={$row['id']}'>Edit</a></td>";
            echo "<td><a href='handle.php?delete_id={$row['id']}'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>