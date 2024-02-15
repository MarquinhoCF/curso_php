<?php

    // Arquivo que não existe
    // include_once "teste.php";

    // Usando o include_once nós garantimos que só é importado 1 vez
    include_once "teste2.php";
    include_once "teste2.php";

    // Arquivo que não existe
    //require_once "teste.php";

    // Usando o require_once nós garantimos que só é importado 1 vez
    require_once "teste3.php";
    require_once "teste3.php";

?>

<p>Testando código</p>