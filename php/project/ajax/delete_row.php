<?php
require_once("../inc/connection.php");
extract($_POST);
echo "$tablename $rowid";
$sql = "update $tablename set isdeleted=1 where id=?";
$cmd = $db->prepare($sql);
$cmd->bindParam(1,$rowid);
$cmd->execute();
?>
