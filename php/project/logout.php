<?php 
session_start();
session_destroy();
$msg = "logout successful";
header("location:index.php?success=$msg");
?>