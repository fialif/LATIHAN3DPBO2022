<?php

class Ram{
    private $capacity;
    private $price;

    public function __construct($c, $p){
        $this->capacity = $c;
        $this->price = $p;
    }

    public function setCapacity($c){
        $this->capacity = $c;
    }
    public function getCapacity(){
        return $this->capacity;
    }

    public function setPrice($p){
        $this->price = $p;
    }
    public function getPrice(){
        return $this->price;
    }

    public function printRam(){
        echo "---------------------- <br>";
        echo "Ram Capacity   : ". $this->capacity ."<br>";
        echo "Price          : ". $this->price ."<br>";
    }
    public function __destruct(){ }
}

?>
