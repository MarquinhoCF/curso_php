<?php

    $arr = [
        'Marcos' => 22,
        'Matheus' => 29,
        'Aléxia' => 25,
        'Pedro' => 24,
        'João' => 43,
    ];

    asort($arr);

    print_r($arr);
    echo "<br>";

    arsort($arr);

    print_r($arr);
    echo "<br>";

    ksort($arr);

    print_r($arr);
    echo "<br>";

    krsort($arr);

    print_r($arr);
    echo "<br>";