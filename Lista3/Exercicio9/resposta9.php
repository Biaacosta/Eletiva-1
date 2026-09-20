<?php
    $frase = $_POST["frase"];

    echo "Frase original: " . $frase . "<br>";
    echo "Sem espaços no início e no final: " . trim($frase) . "<br>";
    echo "Todos os espaços removidos: " . str_replace(" ", "", $frase);
?>
