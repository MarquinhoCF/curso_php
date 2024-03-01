<?php

    $arr = [
        'nome' => 'Marcos',
        'idade' => 22,
    ];

    if(array_key_exists('nome', $arr)) {
        echo "A chave existe!<br>";
    } else {
        echo "A chave não existe!<br>";
    }

    if(array_key_exists('profissao', $arr)) {
        echo "A chave existe!<br>";
    } else {
        echo "A chave não existe!<br>";
    }

    if (isset($arr['idade'])) {
        echo "A chave existe! ISSET<br>";
    } else {
        echo "A chave não existe! ISSET<br>";
    }

    if (isset($arr['teste'])) {
        echo "A chave existe! ISSET<br>";
    } else {
        echo "A chave não existe! ISSET<br>";
    }

    $x = 10;

    if (isset($x)) {
        echo "A variavel x existe!<br>";
    } else {
        echo "A variavel x não existe!<br>";
    }

    if (isset($y)) {
        echo "A variavel y existe!<br>";
    } else {
        echo "A variavel y não existe!<br>";
    }