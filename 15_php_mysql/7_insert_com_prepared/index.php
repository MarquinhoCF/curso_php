<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $nome = 'Suporte de microfone';
    $descricao = 'O suporte é novo e foi produzido na China';

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao); // s -> string, i -> integer, d -> double

    $stmt->execute();

    $conn->close();