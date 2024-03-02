<?php

    class Humano {

        public $maos = 2;
        public $pernas = 2;

        public function falar() {
            echo "Olá, eu sou um Humano!<br>";
        }

    }

    class Professor extends Humano {
        public $disciplina = "Matemática";

        public function estaLecionando() {
            echo "O professor está lecionadno a disciplina de $this->disciplina <br>";
        }
    }

    $marcos = new Humano;

    echo "$marcos->maos <br>";
    $marcos->falar();

    $joao = new Professor;

    echo "$joao->maos <br>";
    echo "$joao->pernas <br>";

    $joao->falar();
    $joao->estaLecionando();