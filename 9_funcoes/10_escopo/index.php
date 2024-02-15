<?php

    $a = 10;

    $b = 15;

    function testeEscopo() {
        $a = 5;

        global $b;

        static $c;

        $a++;

        $b++;

        $c++;

        echo "ESCOPO LOCAL DE A: $a <br>";

        echo "ESCOPO GLOBAL NA FUNÇÂO DE B: $b <br>";

        echo "ESCOPO STATIC DE C: $c <br>";
    }

    echo "ESCOPO GLOBAL DE A: $a <br>";
    echo "ESCOPO GLOBAL DE B: $b <br>";

    testeEscopo();

    echo "ESCOPO GLOBAL DE B: $b <br>";

    testeEscopo();