<?php

    class Pessoa {
        public $nome;

        function falar() {
            echo "Olá, pessoal!!<br>";
        }

    }

    $marcos = new Pessoa();

    $marcos->nome = "Marcos";

    echo $marcos->nome;
    echo "<br>";

    $marcos->falar();