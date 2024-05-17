<?php 
    class Box 
    {
       public function __call($name, $arguments)
       {
            if(function_exists($name)==false)
                echo "<br/> $name function does not exists";
       }
       function getArea($length,$width=null)
       {
            if($width != null)
                return $length * $width;
            else 
                return $length * $length;
       }
       function getVolume($length,$width,$deapth)
       {
            if(func_num_args()!=3)
                return 0;
            else 
                return $length * $width * $deapth;
       }
       
    }

?>