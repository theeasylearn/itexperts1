<?php 
    // var_dump($_POST); 
    //create connection with database
    require_once('../inc/connection.php');
    //create sql query
    $sql = 'insert into batch (courseid,startdate,enddate,classtime) values (?,?,?,?)';
    //prepare sql statement
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$_POST['courseid']);
    $cmd->bindParam(2,$_POST['startdate']);
    $cmd->bindParam(3,$_POST['enddate']);
    $cmd->bindParam(4,$_POST['classtime']);
    //query execute
    $cmd->execute(); 
    $msg = "batch added successfully";
    header("location:../batch.php?success=$msg");
?>