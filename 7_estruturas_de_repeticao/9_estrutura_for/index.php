<?php

    $nome = "Marcos";

    // Contador; Condição; Incremento/Decremento
    for ($i = 0; $i < 10; $i++) {
        if ($i === 4) {
            echo $nome . "<br>";
        }

        if ($i === 8) {
            echo "Terminando com break $i <br>";
            break;
        }

        echo "Testando for $i <br>";
    }