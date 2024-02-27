<?php

for($i=1; $i<=8; $i++) {
    
    $cor = "";

    if($i == 1)
    $cor = "yellow";

    else if ($i == 2)
        $cor ="blue";

    else if ($i == 3)
        $cor ="black";

    else if ($i == 4)
        $cor ="green";

    else if ($i == 5)
        $cor ="red";

    else if ($i == 6)
        $cor ="purple";

    else if ($i == 7)
        $cor ="gray";
        
    else if ($i == 8)
        $cor ="brown";
    

    echo "<div style='background-color: " . $cor . "; width: 100px; height: 100px;'></div>";
    
}
?>
