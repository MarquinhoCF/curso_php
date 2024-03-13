<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $table = 'itens';
    $nome = 'Xícara';
    $descricao = 'É uma xícara usada de cor rosa';

    $sql = "SELECT * FROM itens";

    $result = $conn->query($sql);

    $itens = $result->fetch_assoc(); // Um resultado

    $itens = $result->fetch_all(); // Todos os resultados

    print_r($itens);

    $conn->close();