<?php
    $frase = $_POST["frase"];

    $palavras = explode(" ", trim($frase));
    $maior = "";

    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior)) {
            $maior = $palavra;
        }
    }

    echo "Número total de palavras: " . count($palavras) . "<br>";
    echo "Maior palavra: " . $maior;
?>