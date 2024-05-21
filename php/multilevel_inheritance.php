<?php 
    class KB 
    {
        public function __construct($bytes)
        {
            $this->bytes = $bytes;
            echo "<br/> KB class constructor called....";
        }
        public function getKB()
        {
            $temp = $this->bytes / 1024;
            return $temp;
        }
    }
    class MB extends KB
    {
        public function __construct($bytes)
        {
            KB::__construct($bytes); //calling parent class constructor
            echo "<br/> MB class constructor called....";
        }
        public function getMB()
        {
            $temp = $this->getKB() / 1024;
            return $temp;
        }
    }
    class GB extends MB 
    {
        public function __construct($bytes)
        {
            MB::__construct($bytes); //calling parent class constructor
            echo "<br/> GB class constructor called....";
        }
        public function getGB()
        {
            $temp = $this->getMB() / 1024;
            return $temp;
        }
    }
    // $k1 = new KB(218192);
    // echo "<br/> kb = " . $k1->getKB();

    // $m1 = new MB(8877665);
    // echo "<br/> MB = " . $m1->getMB();


    $g1 = new GB(998877665);
    echo "<br/> gb = " . $g1->getGB();
    echo "<br/> mb = " . $g1->getMB();
    echo "<br/> kb = " . $g1->getKB();
?>