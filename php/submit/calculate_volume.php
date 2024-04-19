<?php
//check whether variables exists or not
if (isset($_GET['submit'],$_GET['length'],$_GET['width'],$_GET['depth']) == false) {
    // echo "input is missing"; 
    header('location:../3_input_volume_calculator.php');
} else {
    //create variables store frontend page input
    $length = $_GET['length'];
    $width = $_GET['width'];
    $depth = $_GET['depth'];

    echo "$length $width $depth";

    $volume = $length * $width * $depth;
    echo "<h3>Volume is = $volume </h3>";
}
