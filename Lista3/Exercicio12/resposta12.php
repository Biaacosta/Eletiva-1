<?php
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $senha = substr(str_shuffle($caracteres), 0, 8);

    echo "Senha: " . $senha;
?>
