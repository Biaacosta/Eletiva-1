<?php
    $A = $_POST["valorA"];
    $B = $_POST["valorB"];

    if ($A == $B) {
        echo "Números iguais: $A";
    }
    elseif ($A < $B) {
        echo "$A $B";
    }
    else {
        echo "$B $A";
    }
?>