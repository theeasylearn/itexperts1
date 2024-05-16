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
        require_once('box.php');
        
        $b1 = new Box();
        echo "<br/> laptop box area = " . $b1->getArea(24,12);
        echo "<br/> gift box area = " . $b1->getArea(24);
        echo "<br/> ac box volume = " . $b1->getVolume(24,10,10);
        echo "<br/> abc box volume = " . $b1->getVolume(24,10,10,100);

        echo "<br/> Good Bye";
    ?>
</body>
</html>