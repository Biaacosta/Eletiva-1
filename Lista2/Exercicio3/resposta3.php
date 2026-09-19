<?php
    $preco = $_POST["preco"];

    if ($preco > 100) {
        $desconto = $preco * 0.15;
        $novoValor = $preco - $desconto;

        echo "O novo valor do produto é: R$ $novoValor";
    } else {
        echo "O valor do produto é: R$ $preco";
    }
?>

