<?php
if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo "<body style='background-color: $color;'>";
    echo "The background color is " . htmlspecialchars($color) . ".";
    echo "</body>";
} else {
    echo "Porfavor escolha uma cor.";
}
?>
