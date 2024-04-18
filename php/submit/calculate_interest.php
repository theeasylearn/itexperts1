<?php 
    //create variables and store user given input 
    $amount = $_POST['amount'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    echo "$amount $rate $year";
    //calculation 
    $interest = $amount * $rate * $year / 100;
    echo "<br/> Simple interest is $interest";
?>