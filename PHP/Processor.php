<?php

class Processor{
    private $name;
    private $price;

    public function __construct($n, $p){
        $this->name = $n;
        $this->price = $p;
    }

    public function setName($n){
        $this->name = $n;
    }
    public function getName(){
        return $this->name;
    }

    public function setPrice($p){
        $this->price = $p;
    }
    public function getPrice(){
        return $this->price;
    }

    public function printProcessor(){
        echo "---------------------- <br>";
        echo "Processor Name : ". $this->name ."<br>";
        echo "Price          : ". $this->price ."<br>";
    }

    public function __destruct(){ }
}

?>