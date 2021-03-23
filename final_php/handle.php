<?php
include_once("class.db.php");
$mycon = new Database();
$mycon->connect();
if (isset($_POST['inname'])) {
        if($_POST['pass']==$_POST['newpass']){
    $data['username'] = $_POST['inname'];
    $data['NickName'] = $_POST['inNickname'];
    $data['password'] = $_POST['pass'];
    $mycon->insertData($data); 
    header("location: Register.php"); //กลับหน้าแรก
        }else{
                header("location: Register.php"); 
        }
}
?>