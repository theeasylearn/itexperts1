<?php 
    / require_once("../inc/verify_login.php");
    //check do we get all input or not
    require_once("../inc/verify_input.php");
    //create database connection
    require_once('../inc/connection.php');
    //create query 
    $sql = 'insert into subject(courseid,title,rate) values (?,?,?)';
    $cmd = $db->prepare($sql);
    extract($_POST);
    //unnamed array
    $data = array($courseid,$title,$rate);
    //query run
    $cmd->execute($data);
    $msg = "subject Added successfully";
    header("Location:../subject.php?success=$msg");
?>