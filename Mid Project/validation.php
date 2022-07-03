<?php
include_once  'includes/dbh.inc.php';
session_start();

if (isset($_POST['login'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        header("location:login.php?Error= Please input correctly");
    }else{
        $sql = "SELECT * FROM users WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_fetch_assoc($result)) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $_POST['password'];
            echo $_SESSION['username'];
            echo $_SESSION['password'];
            header("location:index.php");
        }else{
            header("location:login.php?Error= Please input correctly");
        }
    }
}else{
    echo "Not Working";
}