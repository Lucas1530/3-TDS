<?php 

function fatorial($n){
    
    $fat = 1;
    for($i=$n; $i>=1 $i--) {
        $fat = $fat * $i;
    }
    return $fat;
}

//Programa principal
for($i=5; $i<=12; $i++) {
    $res = fatorial($i);
    echo $i . "! =" . $res . "<br>";
}
