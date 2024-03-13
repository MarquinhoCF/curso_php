<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cursophp";

    $conn = new mysqli($host, $user, $password, $database);

    $sql = "SELECT * FROM itens";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();