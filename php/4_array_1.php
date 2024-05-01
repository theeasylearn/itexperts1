<?php 
    //example of numeric array 
    $cars = array('Maruti','Audi','BMW','Ferrari','Toyota');
    $person[0] = "Priya";
    $person[1] = 27;
    $person[2] = false;
    $person[3] = 12.7;
    $person[] = 'priya@gmail.com'; //position will be 4
    $person[] = 'Gujarat'; //position will be 4
    $person[10] = 'India';
    //display array 
    print_r($cars); //it will display whole array 
    echo "<hr/>";
    print_r($person);

    //change value in array
    $cars[0] = 'Tata';

    //delete 5th value in array
    unset($cars[4]);

    echo "<hr/>";
    print_r($cars); //it will display whole array 
    $person[6] = 'Bhavnagar'; //position will be 4
    echo "<hr/>";
    print_r($person);
?>