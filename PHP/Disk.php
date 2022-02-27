<?php

class Disk{
    private $type;
    private $capacity;
    private $price;

    public function __construct($t, $c, $p){
        $this->type = $t;
        $this->capacity = $c;
        $this->price = $p;
    }

    public function setType($t){
        $this->type = $t;
    }
    public function getType(){
        return $this->type;
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

    public function printDisk()
    {
        echo "---------------------- <br>";
        echo "Disk Type      : ". $this->type ."<br>";
        echo "Disk Capacity  : ". $this->capacity ."<br>";
        echo "Price          : ". $this->price ."<br>";
    }

    public function __destruct(){ }
}

?>