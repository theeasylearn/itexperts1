<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2nd example of class & object and constructor etc</h1>

    <?php 
        require_once('subject.php');
        //object = new class()
        $web = new Subject('PHP','decision making, loop, function etc',180); //construtor will be called automatically 

        //fees will be zero
        $web->display();

        $mobile = new Subject('android','desiging & codeing',150,15000); //construtor will be called automatically 

        $mobile->display();
    ?>
</body>
</html>