<?php

    class Pessoa {
        public $nome;
        public $idade;

        function andar($metros) {
            echo "A pessoa andou $metros metros<br>";
        }
    }

    $marcos = new Pessoa;

    $marcos->nome = "Marcos";
    $marcos->idade = 22;

    echo "O nome dele é $marcos->nome e tem $marcos->idade anos <br>";

    $marcos->andar(20);

    $joaquim = new Pessoa;

    $marcos->nome = "Joaquim";
    $marcos->idade = 32;

    echo "O nome dele é $marcos->nome e tem $marcos->idade anos <br>";

    $marcos->andar(30);