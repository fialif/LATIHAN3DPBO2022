<?php

include "Ram.php";
include "Processor.php";
include "Disk.php";

class Pc{

    private $totalPrice;
    private $pObj;
    private $dObj;
    private $rObj;

    public function __construct($p, $d, $r){
        $this->pObj = $p;
        $this->dObj = $d;
        $this->rObj = $r;
    }

    public function setProce($p){
        $this->pObj = $p;
    }
    public function setDisk($d){
        $this->dObj = $d;
    }
    public function setRam($r){
        $this->rObj = $r;
    }

    public function getProce($p){
        $this->pObj = $p;
    }
    public function getDisk($d){
        $this->dObj = $d;
    }
    public function getRam($r){
        $this->rObj = $r;
    }
    
    public function getTotalPrice(){
        $this->totalPrice = $this->pObj->getPrice() + $this->dObj->getPrice() + $this->rObj->getPrice();
        return $this->totalPrice;
    }

    public function printPC()
    {
        echo "Detail PC <br>";
        $this->pObj->printProcessor();
        $this->dObj->printDisk();
        $this->rObj->printRam();
        echo "---------------------- <br>";
        echo "Total Price    : ". $this->getTotalPrice() ."<br>";
    }

    public function __destruct(){

    }

}

?>