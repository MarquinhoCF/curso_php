<?php

    ini_set('display_errors', 1); error_reporting(E_ALL);

    $host = "localhost";
    $user = "root";
    $password = "a";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        echo "Erro na conexão! <br>";
        echo "Erro: " . $conn->connect_error;
    }