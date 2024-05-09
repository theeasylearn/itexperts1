<?php
    date_default_timezone_set('asia/kolkata');
    $amount=12345;
    echo "<pre>";
    printf("<br/>amount [%d] ",$amount);
    printf("<br/>amount [%10d] ",$amount);
    printf("<br/>amount [%-10d] ",$amount);
    printf("<br/>amount [%010d] ",$amount);
    printf("<br/>amount [%'#10d] ",$amount);
    echo "</pre>";

    $day = date('d'); //return date
    $month = date('m'); //return month
    $year = date('Y'); //return year
    $hour = date('h');
    $minutes = date('i');
    $second = date('s');
    
    $filename = 'currentdate.txt';
    $mode = 'w';

    $fp = fopen($filename,$mode);
    //write currrent and date time into file
    fprintf($fp,"%d-%d-%d %d:%d:%d",$day,$month,$year,$hour,$minutes,$second);
    fclose($fp); 

    $city = "bhavnagar";
    $pincode = 364001;
    $latidue = 21.7645;
    $longitude = 72.1519;

    $output = sprintf("<br/> %s has pincode %d and it latitude = %f and longitude = %f",$city,$pincode,$latidue,$longitude);
    echo $output;

    $name= "     IT EXPERTS ACDEMY     ";

    echo "<pre>";
    echo "*" . ltrim($name) . "*";
    echo "<br/> *" . rtrim($name) . "*";
    echo "<br/> *" . trim($name) . "*";
    echo "</pre>";
    echo "<br/>";
    echo str_repeat('-',100);
    echo "<br/>";
    $name = trim($name);
    echo str_pad($name,80,"*") . '<br/>';
    echo str_pad($name,80,"*",STR_PAD_BOTH) . '<br/>';
    echo str_pad($name,80,"*",STR_PAD_LEFT) . '<br/>';
    echo str_repeat('-',100);
    
    echo "<br/>";
?>