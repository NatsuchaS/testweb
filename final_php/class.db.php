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
}
?>