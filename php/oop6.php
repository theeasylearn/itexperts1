<?php
    //create Object of MyObject class 
    $course = new MyObject();
    $course->name = "Junior software developer";
    $course->eligiblity = '12th';
    $course->fees = 0;
    $course->trainer = 'Ankit Patel';

    echo "<br/> course name =  $course->name";
    echo "<br/> course eligiblity =  $course->eligiblity";
    echo "<br/> course fees =  $course->fees";
    echo "<br/> course trainer =  $course->trainer";
    echo "<br/> course = ";
    echo $course;

    // $course2 = $course; it should not be used because it store reference of course into course2 therefore any change in one object is also automatically applied to another object

    $course2 = clone $course; //object cloning
    echo "<br/> course2 = ";
    echo $course2;

    $course->fees = 100;
    $course2->name = "Adavanced PHP Training";
    echo "<br/> course = ";
    echo $course;
    echo "<br/> course2 = ";
    echo $course2;

    //call static method  
    MyObject::display(); 
    MyObject::show(); 
?>