<?php

include "conn.php";

$err = "";

if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST["password"])){
        $err = "Enter Username and Password";
    }else{
        $uname = $_POST['username'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM login WHERE username='$uname' AND password='$pwd'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $rows = mysqli_num_rows($result);

        if($rows == 1){
            header('Location: loggedin.php');
        }else{
            $err = "Invalid Username or Password";
        }


    }


}


include "close.php";

?>
