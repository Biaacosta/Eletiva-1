<?php
    $nome = $_POST["nome"];

    $nomes = explode(" ", $nome);

    foreach ($nomes as $nome) {
        echo $nome[0] . ".";
    }
?>
