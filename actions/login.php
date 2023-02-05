<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("./db_connection.php");

if(!empty($_POST)){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->query("SELECT * FROM user WHERE email_address = '$email' AND password = '$password' ORDER BY id DESC LIMIT 1");
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($user)){
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='../login.php'>Login Now</a>";
    }else{
        echo "<font color='red'>The Credentials provided are wrong.</font><br/>";
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }
}
