<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        
        $mean = ($num1 + $num2 + $num3) / 3;
        
        echo "O numero arimético é: " . $mean;
    } else {
        echo "Por favor insere um numero.";
    }
}
?>

<form method="post">
    Number 1: <input type="text" name="num1"><br>
    Number 2: <input type="text" name="num2"><br>
    Number 3: <input type="text" name="num3"><br>
    <input type="submit" value="Calculate Mean">
</form>
