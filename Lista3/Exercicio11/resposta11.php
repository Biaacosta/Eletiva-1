<?php
    $valor = $_POST["valor"];

    echo "R$ " . number_format($valor, 2, ",", ".");
?>
