<?php

    $number = $_POST["number"];

    echo "Multiplication Table up to ". $number. "<br><br>";

    // Start Table
    echo "<table border='1'>";

    // Print Header
    echo "<tr>";
    echo "<td>&nbsp;</td>";
    for ($i = 1; $i <= $number; $i++) {
        echo "<td>" . $i . "</td>";
    }
    echo "</tr>";

    // Print Table
    for ($i = 1; $i <= $number; $i++) {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        for($j = 1; $j <= $number; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "<tr>";
    }
echo "</table>"
?>