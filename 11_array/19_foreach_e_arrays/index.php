<?php

    $marcos = [
        'nome' => 'Marcos',
        'idade' => 22,
        'profissao' => 'Engenheiro'
    ];

    $matheus = [
        'nome' => 'Matheus',
        'idade' => 29,
        'profissao' => 'Programador'
    ];

    foreach ($marcos as $carac => $valor) {
        echo "$carac => $valor <br>";
    }

    foreach ($matheus as $carac => $valor) {
        echo "$carac => $valor <br>";
    }