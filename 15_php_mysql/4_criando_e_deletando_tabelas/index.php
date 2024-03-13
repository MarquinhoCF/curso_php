<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $sql = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
    //$sql = "DROP TABLE teste";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();