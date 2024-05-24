<?php
    require('object.php');
    interface MyCommon
    {
        const PI = 3.14;
        public function doSomething(); //abstract method does not contain any code
    }
    class MyMath extends MyObject implements  MyCommon
    {
        public function doSomething()
        {
            echo "<br/> I am dosomething method.";
            echo "<br/> I have constant pi " . MyCommon::PI;
        }
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
    $m1->doSomething();
?>