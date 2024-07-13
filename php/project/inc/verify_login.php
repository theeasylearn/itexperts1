<?php
//this code check whether user logged in or not
session_start();
if (isset($_SESSION['userid']) == false) {
    //user has not logged in so he should not able to visit current page
    //so we forcefully redirect (fowrard) user login page
    header("location:index.php?error=you need to login first");
}
?>