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
                echo "<script>alert('Password Incorrect!'); 
                window.location='Register.php'</script>";
                exit();
                
        }
}
else if (isset($_POST['logname'])) { //เข้าสู่ระบบ
        $result = $mycon->varify_user($_POST['logname'], $_POST['logpass']);
        session_start();
        if ($result['n'] == 1) {
                $_SESSION['user'] = $result['user'];
                header("location: productlist.php");
            
        } else {
                echo "<script>alert('Username and Passward erroneous!'); 
                window.location='login.php'</script>";
                exit();
        }
}
?>