<?php 
    class Product
    {
        //property variables 
        private $name;
        private $price;
        private $stock;
        public $weight;
    
        //member function (method) setter methods
        public function setName($name)
        {
            $this->name = $name;
        }
        public function setPrice($price)
        {
            $this->price = $price;
        }
        public function setStock($stock)
        {
            $this->stock = $stock;
        }
        public function setWeight($weight)
        {
            $this->weight = $weight;
        }
        //getter methods
        function getName()
        {
            return $this->name;
        }
        function getPrice()
        {
            return $this->price;
        }
        function getStock()
        {
            return $this->stock;
        }
        function getWeight()
        {
            return $this->weight;
        }
        function showAll()
        {
            var_dump($this);
        }
    }
?>