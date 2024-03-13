<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $id = 7;

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

    $nome = 'Sofá';
    $descricao = 'Sofá semi-novo, com madeira de lei';

    $stmt->bind_param("ssi", $nome, $descricao, $id); // s -> string, i -> integer, d -> double

    $stmt->execute();

    if ($stmt->error) {
        echo "Erro: " . $stmt->error;
    }

    $conn->close();