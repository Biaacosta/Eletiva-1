<?php

    $palavra = $_POST["palavra"];

    echo"A palavra em maiúsculo fica: " . strtoupper("$palavra") . "<br>";
    echo"A palavra em minúculo fica: " . strtolower("$palavra");