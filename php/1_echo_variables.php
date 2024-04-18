<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            echo "IT EXPERTS ACADEMY";
            $color = 'yellow';
        ?>
    </title>
</head>
<body bgcolor="<?php echo $color; ?>">
<?php 
//start of php script
    echo "we have started learnin php @ IT EXPERTS Academy";
    echo "<br/>  <b>PHP</b> is easy to learn and use";

    print("<br/> print function is also used to print message.");

    printf("<br/> it is also used to print output");

    //how to create variables
    //syntax 
    //$variablename = value;
    $class = "IT experts academy";
    $year = 2024;
    $pi = 3.14;
    $isGovermentCourse = true;
    echo "<br/> class = $class year = $year pi = $pi is Goverment Course = $isGovermentCourse";
    $class = 100;
    $year = 'two thousand twenty four';
    $pi = true;

    print "<br/> class = $class year = $year pi = $pi is Goverment Course = $isGovermentCourse";

    printf("<br/> class %d year %s ",$class,$year);
/* end of php script */ 
?>
</body>
</html>