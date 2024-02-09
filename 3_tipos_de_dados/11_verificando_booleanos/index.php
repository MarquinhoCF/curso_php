<?php

    $a = true;

    if (is_bool($a)) {
        echo "É um booleano <br>";
    }

    if (is_bool(0)) {
        echo "É um booleano <br>";
    }

    if (is_bool(false)) {
        echo "É um booleano <br>";
    }

    if (0 == false) {
        echo "0 é considerado falso <br>";
    }

    if (0.0 == false) {
        echo "0.0 é considerado falso <br>";
    }

    if ("0" == false) {
        echo "'0' é considerado falso <br>";
    }

    if (NULL == false) {
        echo "NULL é considerado falso <br>";
    }