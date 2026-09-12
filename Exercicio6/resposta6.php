<?php
    $fahr = $_POST["fahr"];
    $conversao = (32 - $fahr) / 1.8 ;
    echo "O valor da conversão é: $conversao";
    