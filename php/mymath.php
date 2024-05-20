<?php
    require('object.php');
    class MyMath extends MyObject
    {
        public function add()
        {
            $temp = $this->data['num1'] + $this->data['num2'];
            return $temp;
        }
        public function sub()
        {
            $temp = $this->data['num1'] - $this->data['num2'];
            return $temp;
        }
    }

    //create object of MyMath
    $m1 = new MyMath();
    $m1->num1 = 100;
    $m1->num2 = 20;
    $addition = $m1->add();
    $substraction = $m1->sub();
    echo "<br/> addition = $addition substraction = $substraction"; 
?>