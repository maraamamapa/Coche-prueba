<?php 
include("coche.php"); 

$coche1=new Coche("BMW",1300);
$coche2=new Coche("Mercedes",100);
echo "<h3> Tipos de coches:</h3>";
echo "La marca del coche 1 es:"." ".$coche1->getMarca()." "."y tiene"." ".
$coche1->getNumCaballos()." "."caballos."."<br>";

echo "La marca del coche 2 es:"." ".$coche2->getMarca()." "."y tiene"." ".
$coche2->getNumCaballos()." "."caballos."."<br>";