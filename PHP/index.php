<?php

include "Pc.php";

$pObjek = new Processor("Sata", 150);
$dObjek = new Disk("SSD", "500 GB", 150);
$rObjek = new Ram("16 GB", 400);

$pcObjek = new Pc($pObjek, $dObjek, $rObjek);

// $rObjek->printRam();
// echo $pcObjek->getTotalPrice();

$pcObjek->printPC();

?>