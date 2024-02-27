<?php

//Termos

$t1 = 1;
$t2 = 1;

for($i=0 ; $i<15 ; $i++){

    
    echo $t1 . "<br>";
    $novoT = $t1 + $t2;
    $t1 = $t2;
    $t2 = $novoT;
}
    ?>
