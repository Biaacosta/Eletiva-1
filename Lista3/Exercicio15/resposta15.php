<?php
    $email = $_POST["email"];

    $partes = explode("@", $email);

    echo "Domínio: " . $partes[1];
?>
