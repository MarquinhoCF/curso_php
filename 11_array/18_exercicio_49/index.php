<?php

    $nome = 'Luna';
    $raca = 'Shih-Tzu';
    $idade = 4;
    $cor = 'Malha preta e brnca';

    $luna = compact('nome', 'raca', 'idade', 'cor');

    print_r($luna);
    echo "<br>";

    foreach ($luna as $caracteristica => $value) {
        echo $caracteristica . ": " . $value . "<br>";
    }