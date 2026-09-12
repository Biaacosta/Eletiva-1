<?php
    $valor = $_POST["valor"];
    $des = $_POST["des"];
    $desconto = $valor - ($valor * $des / 100);
    echo "O produto com desconto é de: $desconto";