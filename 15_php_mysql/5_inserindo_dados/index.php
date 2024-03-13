<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $table = 'itens';
    $nome = 'Xícara';
    $descricao = 'É uma xícara usada de cor rosa';

    $sql = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();