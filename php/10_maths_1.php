<?php 
    //maths related library functions
    $num = rand(-10,10);
    echo "<br/> any random number between -10 and 10 $num";

    //get absolute value num 
    echo "<br/> absolute value of $num = " . abs($num);

    $amount = 123.45678;
    echo "<br/> ceil value of $amount = " . ceil($amount);
    echo "<br/> floor value of $amount = " . floor($amount);

    echo "<br/> round value of $amount = " . round($amount,2);
    echo "<br/> round value of $amount = " . round($amount,1);
    echo "<br/> round value of $amount = " . round($amount,0);

    $base = 2;
    $exponent = 10;
    $result = pow($base,$exponent);
    echo "<br/> 2 ^ 10 = $result ";

?>