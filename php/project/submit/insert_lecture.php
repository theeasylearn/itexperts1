<?php 
    //var_dump($_POST);
    require_once('../inc/connection.php');
    extract($_POST);
    $sql = "insert into lecture (teacherid, subjectid, batchid, duration, amount, lecturedate) VALUES (:teacherid,:subjectid,:batchid,:duration,:amount,:lecturedate)";

    $cmd = $db->prepare($sql);
    $data = array(":teacherid"=>$teacherid, ":subjectid"=> $subjectid, ":batchid"=> $batchid, ":amount"=> $amount, ":duration"=> $duration, ":lecturedate"=> $lecturedate);

    $cmd->execute($data);
    $msg = "lecture added successfully";
    header("location:../lecture.php?success=$msg");
?>