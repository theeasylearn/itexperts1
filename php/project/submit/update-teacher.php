<?php
require("../inc/connection.php");
var_dump($_POST);
var_dump($_FILES);
extract($_POST);
if ($_FILES['photo']['name'] == '') {
    $photo = $oldphoto;
} else {
    //delete old photo 
    unlink("../images/$oldphoto");
    $photo = rand(1000, 9999) . "_" . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], "../images/$photo");
}
    $sql = "UPDATE teacher SET name=?,mobile=?,email=?,gender=?,qualification=?,experience=?,photo=? WHERE id=?";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(1,$fullname);
    $cmd->bindParam(2,$mobile);
    $cmd->bindParam(3,$email);
    $cmd->bindParam(4,$gender);
    $cmd->bindParam(5,$qulification);
    $cmd->bindParam(6, $experience);
    $cmd->bindParam(7,$photo);
    $cmd->bindParam(8,$teacherid);
    $cmd->execute();
    $msg = "Teacher detail updated successfully";
    header("Location:../teacher.php?success=$msg");
?>