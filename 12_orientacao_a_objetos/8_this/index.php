<?php

    class Animal {

        public $nome;

        function escolherNome($nome) {
            $this->nome = $nome;
        }

        function latir() {
            return "Au au au!<br>";
        }

        function latirForte() {
            return strtoupper($this->latir());
        }

    }

    $luna = new Animal;

    echo "O nome do animal é: $luna->nome <br>";

    $luna->escolherNome('Luna');

    echo "O nome do animal é: $luna->nome <br>";

    echo $luna->latir();

    echo $luna->latirForte();
