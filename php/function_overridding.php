<?php 
    class OneDay 
    {
        public function NoBall()
        {
            echo "<br/> Add one run in batting team account";
            echo "<br/> do not count this ball in balling team";
        }
    }
    class T20 extends OneDay
    {
        public function NoBall()
        {
            echo "<br/> do not count this ball";
            echo "<br/> batsman will not out except run out";
        }
    }

    //create object parent class
    $o1 = new OneDay();
    $t1 = new T20();

    $o1->NoBall(); //calling parent class method
    $t1->NoBall(); //calling child class method
?>