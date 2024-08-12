<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    
    $mean = ($num1 + $num2 + $num3) / 3;
    
    echo "The arithmetic mean is: " . $mean;
} else {
    echo "Please provide three numbers.";
}
?>
