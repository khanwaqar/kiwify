<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once("./db_connection.php");

if(!empty($_POST)){
    $user = checkIfEmailExists($conn, $_POST['email']);
    if(empty($user)){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email . "===>". $password;
        if(empty($email) || empty($password)) {
				
            if(empty($email)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }
            
            if(empty($password)) {
                echo "<font color='red'>Age field is empty.</font><br/>";
            }            
            
            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else { 

            $sql = "INSERT INTO user(email_address, password) VALUES(:email, :password)";

            echo $sql;
            $query = $conn->prepare($sql);
                    
            $query->bindparam(':email', $email);
            $query->bindparam(':password', $password);
            $query->execute();
            
            echo "<font color='green'>Data added successfully.";
            echo "<br/><a href='../login.php'>Login Now</a>";
        }
    }
    else{
        echo "<font color='red'>The email provided is already linked with Database.</font><br/>";
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    }

}

function checkIfEmailExists($conn,$email){
    // getting the last registered user
    
    $stmt = $conn->query("SELECT * FROM user WHERE email_address = '$email' ORDER BY id DESC LIMIT 1");
    $user = $stmt->fetch();

    return $user;
}