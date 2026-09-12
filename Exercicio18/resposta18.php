<?php
    $dias = $_POST["dias"];
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    
    echo "Os dias informados correspondem a: $horas horas, $minutos minutos e $segundos segundos";