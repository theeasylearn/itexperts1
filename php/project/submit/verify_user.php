<?php 
    require_once("../inc/connection.php");
    //var_dump($_POST);
    extract($_POST);
    $sql = "select id,password from users where email=?";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$email);
    $cmd->execute();
    $table = $cmd->fetchAll();
    if(sizeof($table) == 0)
    {
        $message = "invalid login attempt";
        header("location:../index.php?error=$message");
    }
    else 
    {
        //match password
        
    }
?>