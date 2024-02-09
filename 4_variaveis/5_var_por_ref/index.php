<?php

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "<br>";

    $y = 15;

    echo "Atribuição após ref <br>";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "<br>";

    $x = 20;

    echo "Atribuição após ref 2 <br>";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";
    echo "<br>";

    $nome = "Marcos";
    $nome2 =& $nome;

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";
    echo "<br>";

    $nome = "João";

    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br>";
    echo "<br>";