<?php 
    //create 3 variable to store input
    // $num1 = $_POST['num1'];
    // $num2 = $_POST['num2'];
    // $operation = $_POST['operation'];
    extract($_POST);
    // echo "<br/> $num1 $num2 $operation";
    $result=null; 
    if($operation == "1")
    {
        $result=$num1 + $num2;
    }
    else if($operation == "2")
    {
        $result = $num1 - $num2;
    }
    else if($operation == "3")
    {
        $result = $num1 * $num2;
    }
    else if($operation == "4")
    {
        $result = $num1 / $num2;
    }
    $output = "result is $result";
    header("location:../3_maths_calculator.php?msg=$result")
?>