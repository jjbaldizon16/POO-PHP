<?php

require("coche.php");

$coche = new Coche("Lila", "Nissan", "Sentra V12 88", 450, 250, 5);
$coche2 = new Coche("Verde", "Renault", "V200", 200, 100, 5);
$coche3 = new Coche("Amarillo", "Taxi", "Uber", 150, 50, 5);
$coche4 = new Coche("Rojo", "Honda", "Civic2000", 200, 100, 5);
$coche5 = new Coche("Gris", "Suzuki", "Hercules", 150, 90, 2);

var_dump($coche);
var_dump($coche2);
var_dump($coche3);
var_dump($coche4);
var_dump($coche5);


?>