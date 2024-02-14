<?php

    if (10 < 2) {
        echo "Entrou no primeiro if 1<br>";
        if ("teste" != "teste") {
            echo "Entrou no segundo if 1<br>";
        } else {
            echo "Entrou no segundo else 1<br>";
        }
    } else {
        echo "Entrou no primeiro else 1<br>";
    }

    $escopo = 10;

    if (10 > 2) {
        echo "Entrou no primeiro if 2<br>";
        if ("teste" == "teste") {
            echo "Entrou no segundo if 2<br>";
            echo $escopo . "<br>";
        } else {
            echo "Entrou no segundo else 2<br>";
        }
    } else {
        echo "Entrou no primeiro else 2<br>";
    }