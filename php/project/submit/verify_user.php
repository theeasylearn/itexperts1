<?php
session_start(); //no line should be above this line
require_once("../inc/connection.php");
//var_dump($_POST);
extract($_POST);
$sql = "select id,password from users where email=?";
$cmd = $db->prepare($sql);
$cmd->bindParam(1, $email);
$cmd->execute();
$table = $cmd->fetchAll();
if (sizeof($table) == 0) {
    $message = "invalid login attempt";
    header("location:../index.php?error=$message");
} else {
    //match password
    $HashedPassword = $table[0]['password'];
    echo "user given password = $password and Hashed password = $HashedPassword";
    if (password_verify($password, $HashedPassword) == true)
    {
        //create session variable userid which has id of the user logged in 
        //this variable is only created after use logged in successfully
        $_SESSION['userid'] = $table[0]['id'];
        $message = "login successfull";
        header("location:../lecture.php?success=$message");
    }
    else {
        $message = "invalid login attempt";
        header("location:../index.php?error=$message");
    }
}
