<?php

    if (3 == 3) {
        echo "Comparação verdadeira 1<br>";
    }

    if (3 == 4) {
        echo "Comparação verdadeira 2<br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if ($a == $b) {
        echo "Comparação verdadeira 3<br>";
    }

    if ($a == $c) {
        echo "Comparação verdadeira 4<br>";
    }

    $nome = "Marcos";
    $nomeDoSistema = "Marcos";

    if ($nome == $nomeDoSistema) {
        echo "O nome coincide <br>";
    }

    $nome = "Marcos";
    $nomeDoSistema = "João";

    // Tomar cuidado com operador de igualdade
    if ($nome = $nomeDoSistema) {
        echo "O nome coincide <br>";
        echo "nome = " . $nome;
    }