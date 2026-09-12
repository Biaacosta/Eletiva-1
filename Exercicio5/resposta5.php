<?php
    $graus = $_POST["graus"];
    $conversao = (1.8 * $graus) + 32;
    echo "O valor da conversão é: $conversao";
    