<?php

    $frase = "O rato roeu a roupa do Rei de Roma"; // 4 letras "a"

    $contador = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] === "a") {
            $contador++;
        }
    }

    echo "O número de 'a's na frase é de: $contador <br>";