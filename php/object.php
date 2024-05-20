<?php
class MyObject
{
    //static variables only get memoery once no matter how many object is created...
    //create static variable
    protected static $author = "Ankit Patel";
    protected static $count = 0;

    protected $data = array();
   
    //use magic method __set()
    public function __set($key, $value)
    {
        echo "<br/> __set method is called with $key & $value";
        $this->data[$key] = $value;
    }
    //use magic method __get()
    public function __get($key)
    {
        if (isset($this->data[$key]) == true)
            return $this->data[$key];
        else
            return null;
    }
    //use magic method __toString()
    public function __toString()
    {
        echo "<table border='1' width='50%' cellpadding='5'>";
        echo "<tr><th>key</th><th>value</th></tr>";
        foreach ($this->data as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table>";
        return "";
    }
    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
    public function __unset($key)
    {
        echo "<br/> __unset is called with $key";
        unset($this->data[$key]);
    }
    public function __clone()
    {
        echo "<br/> __clone method is called....";
    }
    public static function __callStatic($name, $arguments)
    {
        echo "<br/> no such function defined $name";
        
    }
    //create static function 
    public static function show()
    {
        echo "<br/> author " . MyObject::$author;
        echo "<br/> count " . MyObject::$count;
    }  
}
?>