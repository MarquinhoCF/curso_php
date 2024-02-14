<?php

    $idade = 16;
    $idade2 = 18;
    $idade3 = 26;

    $maiorIdade = 18;

    $msg = "Você é maior de idade <br>";

    if ($idade >= $maiorIdade) {
        echo "1 - " . $msg;
    } else {
        echo "Não é maior de idade <br>";
    }

    if ($idade2 >= $maiorIdade) {
        echo "2 - " . $msg;
    } else {
        echo "Não é maior de idade <br>";
    }

    if ($idade3 >= $maiorIdade) {
        echo "3 - " . $msg;
    } else {
        echo "Não é maior de idade <br>";
    }