<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //import product.php file
        require_once('product.php');

        //create object
        $p1 = new Product();

        $p1->setName('Object Oriented Programming in PHP');
        $p1->setPrice(500);
        $p1->setWeight(300);
        $p1->setStock(50);

        echo "<br/> Product Name " . $p1->getName();
        echo "<br/> Product Price " . $p1->getPrice();
        echo "<br/> Product weight " . $p1->getWeight();
        echo "<br/> Product Stock " . $p1->getStock();

        $p2 = new Product();

        $p2->setName('Laptop');
        $p2->setPrice(35500);
        $p2->setWeight(2000);
        $p2->setStock(5);


        echo "<br/> Product Name " . $p2->getName();
        echo "<br/> Product Price " . $p2->getPrice();
        echo "<br/> Product weight " . $p2->getWeight();
        echo "<br/> Product Stock " . $p2->getStock();

        //$p1->name = 'abc'; //will not run because name is private instance variable
        $p1->weight = 999;
        echo "<br/> Product weight " . $p1->getWeight();
        $p1->showAll();
        $p2->showAll();
    ?>
</body>
</html>