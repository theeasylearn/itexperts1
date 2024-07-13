<?php
if (isset($_POST['submit']) == false) {
    header("location:../add_course.php?error=input required");
    exit;
}
?>