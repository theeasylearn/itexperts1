<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('database.php');
    //create database class object

    $db = new Database(); //constructor call
    echo $db; //it will call __toString() method
    $name = 'abc';
    if (isset($name) == true)
        echo "<br/> name exists";
    if (isset($db->database) == true)
        echo "<br/> database exists";
    else
        echo "<br/> database does not exists";

    if (isset($db->email) == true)
        echo "<br/> email exists";
    else
        echo "<br/> email does not exists";

    echo "<br/> $db->database";
    $db->database = 'students';
    
    ?>
</body>

</html>