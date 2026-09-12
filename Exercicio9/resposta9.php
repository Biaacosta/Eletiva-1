<?php
    $comprimento = $_POST["comprimento"];
    $largura = $_POST["largura"];
    $perimetro = ($comprimento * 2) + ($largura * 2);
    echo "O perímetro do retângulo é: $perimetro";