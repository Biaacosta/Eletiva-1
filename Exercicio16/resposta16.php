<?php
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"];
    $meses = $_POST["meses"];
    $juros = $capital * $taxa * $meses;
    echo "O valor final com juros simples aplicado é de: $juros";
