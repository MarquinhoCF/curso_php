<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if (5 > 2) {
        $teste = "dsa";
    }

    echo "$teste global 2 <br>";

    function funcao() {
        $teste = "jorge";
        echo "$teste local 3 <br>";
    }

    echo "$teste global 4 <br>";

    funcao();

    function testandoGlobal() {
        global $teste;

        $teste = 2;
    }

    echo "$teste global 5 <br>";

    testandoGlobal();

    echo "$teste global 6 <br>";
