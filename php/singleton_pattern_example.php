<?php
class Singleton
{
    private static $instance = null;
    private $classname = '';
    private $batch = '';
    public function __set($key, $value)
    {
        $this->key = $value;
    }
    public function __get($key)
    {
        if (isset($this->key) == true)
            return $this->key;
        else
            return null;
    }
    private function __construct()
    {
        echo "<br/> I am private constructor therefore can be accessed only inside class";
        $this->classname = 'it experts';
        $this->batch = 'Junior Software Developer';
    }
    public static function getInstance()
    {
        if (self::$instance == null) {
            echo "<br/> this is the creation of object first time";
            self::$instance = new Singleton();
        } else {
            echo "<br/> this is the creation of object second time onwards";
        }
        return self::$instance;
    }
};

//create object
$first = Singleton::getInstance();
$second = Singleton::getInstance();
$third = Singleton::getInstance();

$first->classname = 'I.T.E';
echo "<br/> first has classname = " . $first->classname;
echo "<br/> second has classname = " . $second->classname;
echo "<br/> third has classname = " . $third->classname;

$second->batch = 'Junion software developer batch 2';
echo "<br/> first has batch = " . $first->batch;
echo "<br/> second has batch = " . $second->batch;
echo "<br/> third has batch = " . $third->batch;
?>