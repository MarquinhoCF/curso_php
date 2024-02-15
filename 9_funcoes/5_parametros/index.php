<?php

    function velocidadMaxima($vel) {

        if (is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor passe um número inteiro <br>";
        }
        

    }

    velocidadMaxima(200);
    velocidadMaxima(300);
    velocidadMaxima(400);
    
    //velocidadMaxima();

    echo "Testando continuando <br>";

    $velocidade = 125;

    velocidadMaxima($velocidade);

    // PHP ignora parâmetros desnecessários
    velocidadMaxima(250, "teste");

    velocidadMaxima("teste");

    function descreverAnimal($nome, $raca) {
        echo "O $nome é da raça $raca <br>";
    }

    descreverAnimal("Bob", "vira lata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Tita");