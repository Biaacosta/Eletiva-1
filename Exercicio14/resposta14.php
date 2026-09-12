<?php
    $peso = $_POST["peso"];
    $h = $_POST["h"];
    $imc = ($peso/ $h ** 2) * 10000;
    echo "O seu IMC é de: $imc";