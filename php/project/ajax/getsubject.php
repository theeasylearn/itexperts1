<?php
    require_once("../inc/connection.php");
    $sql = "select s.id,s.title from subject s where courseid in(select c.id from course c, batch b where c.id=b.courseid and b.courseid=?)";
    extract($_REQUEST);
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$batchid);
    $cmd->execute();
    $table = $cmd->fetchAll();
    echo "<select name='subjectid'>";
    foreach($table as $row)
    {
        echo "<option value='{$row['id']}'>{$row['title']}</option>";
    }
    echo "<select>";
?>