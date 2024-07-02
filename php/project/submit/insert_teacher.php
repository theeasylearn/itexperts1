<?php 
    // var_dump($_POST);
    // var_dump($_FILES);
    require_once("../inc/connection.php");
    extract($_POST);
    //create variable & store query
    $sql = "INSERT INTO teacher(name, mobile, email, gender, qualification, experience, photo) VALUES (:name,:mobile,:email,:gender,:qualification,:experience,:photo)";
    //move file into project directory
    $photo = rand(1000,9999) . "_" . $_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'],"../images/$photo");
    //prepare query
    $cmd = $db->prepare($sql);
    $cmd->bindParam(":name",$fullname);
    $cmd->bindParam(":mobile",$mobile);
    $cmd->bindParam(":email", $email);
    $cmd->bindParam(":gender", $gender);
    $cmd->bindParam(":qualification", $qulification);
    $cmd->bindParam(":experience", $experience);
    $cmd->bindParam(":photo",$photo);

    //query run 
    $cmd->execute();
    $msg = "Teacher added successfully";
    header("Location:../teacher.php?success=$msg");
?>