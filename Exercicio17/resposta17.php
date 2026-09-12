<?php
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"] / 100;
    $meses = $_POST["meses"];
    $montante = $capital * (1 + $taxa) ** $meses;
    
    echo "O valor do montante aplicado é de: R$ " . number_format($montante, 2);
