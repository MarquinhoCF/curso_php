<?php

    class Humano {

    }

    class Animal {

    }

    class Professor extends Humano {

    }

    $marcos = new Humano;
    $luna = new Animal;
    $pedro = new Professor;

    if ($marcos instanceof Humano) {
        echo "Marcos é um humano <br>";
    } else{
        echo "Marcos não é um humano <br>";
    }

    if ($marcos instanceof Professor) {
        echo "Marcos é um professor <br>";
    } else{
        echo "Marcos não é um professor <br>";
    }

    if ($luna instanceof Humano) {
        echo "Luna é um humano <br>";
    } else{
        echo "Luna não é um humano <br>";
    }

    if ($luna instanceof Professor) {
        echo "Luna é um professor <br>";
    } else{
        echo "Luna não é um professor <br>";
    }

    if ($pedro instanceof Humano) {
        echo "Pedro é um humano <br>";
    } else{
        echo "Pedro não é um humano <br>";
    }

    if ($pedro instanceof Professor) {
        echo "Pedro é um professor <br>";
    } else{
        echo "Pedro não é um professor <br>";
    }