<?php

    function parOuImpar($numero) {
        echo "O número $numero: é ";
        if ($numero % 2 === 0) {
            echo "par <br>";
        } else {
            echo "ímpar <br>";
        }
    }

    parOuImpar(30);
    parOuImpar(31);
    parOuImpar(22);
    parOuImpar(11);