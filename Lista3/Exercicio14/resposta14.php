<?php
    $palavra = $_POST["palavra"];

    $palavra = strtolower($palavra);
    $invertida = strrev($palavra);

    if ($palavra == $invertida) {
        echo "É palíndromo!";
    } else {
        echo "Não é palíndromo!";
    }
?>