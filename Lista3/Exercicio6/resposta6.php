<?php
    $numero = $_POST["numero"];

    echo "Número arredondado para cima: " . ceil($numero) . "<br>";
    echo "Número arredondado para baixo: " . floor($numero) . "<br>";
    echo "Número arredondado normalmente: " . round($numero);
?>