<?php
require_once('object.php');

//create Object of MyObject class 
$course = new MyObject();
$course->name = "Junior software developer";
$course->eligiblity = '12th';
$course->fees = 0;
$course->trainer = 'Ankit Patel';
$course->fees = 1;

echo "<br/> course name =  $course->name";
echo "<br/> course eligiblity =  $course->eligiblity";
echo "<br/> course fees =  $course->fees";
echo "<br/> course trainer =  $course->trainer";
echo "<br/> course address =  $course->address";

echo "<br/> $course";
if (isset($course->name) == true) {
    echo "<br/> name key exists";
} else {
    echo "<br/> name key does not exists";
}
if (isset($course->address) == true) {
    echo "<br/> address key exists";
} else {
    echo "<br/> address key does not exists";
}

$car = new MyObject();
$car->color='white';
$car->price = 1125000;
$car->modal = 'vlx';
echo "<br/> $car";
$year = 2024;
// echo "<br/> $year";
// unset($year);
// echo "<br/> $year";
unset($car->modal);
echo $car;
?>