<?php

    $str = "Essa é a minha string";

    $minha = substr($str, 10, 5); // String pai, indice inicial, comprimento da palavra

    echo $str . "<br>";
    echo $minha . "<br>";

    $str2 = "Testando esta string";

    $novaString = substr($str2, 8); // Omitir comprimento -> Pega até o fim

    echo $novaString . "<br>";

    $novaString2 = substr($str2, 8, -3); // Comprimento negativo -> Remover do último índice

    echo $novaString2 . "<br>";