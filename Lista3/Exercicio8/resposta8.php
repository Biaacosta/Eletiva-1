<?php
    $frase = $_POST["frase"];

    $quantidade = substr_count($frase, "a") 
                + substr_count($frase, "e")
                + substr_count($frase, "i")
                + substr_count($frase, "o")
                + substr_count($frase, "u");

    echo "Quantidade de vogais: " . $quantidade;
?>
