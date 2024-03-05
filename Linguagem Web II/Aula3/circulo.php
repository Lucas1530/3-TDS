<?php

define("PI", 3.14);

function area() {
    $area = $raio * $raio * PI;
    return $area;
}

function circunferencia($raio) {
    return 2 * PI * $raio;
}

//Programa principal

$r1 = 10;
$area = area($r1);
$cirfunf = circunferencia($r1);
echo"Raio: " . $r1 . "cm Área: " . "cm Circunf:" . $cirfunf . "cm" . "<br>" . "<br>";

$r1 = 20;
$area = area($r1);
$cirfunf = circunferencia($r1);
echo"Raio: " . $r1 . "cm Área: " . "cm Circunf:" . $cirfunf . "cm" . "<br>" . "<br>";

$r1 = 30;
$area = area($r1);
$cirfunf = circunferencia($r1);
echo"Raio: " . $r1 . "cm Área: " . "cm Circunf:" . $cirfunf . "cm" . "<br>" ;

?>
