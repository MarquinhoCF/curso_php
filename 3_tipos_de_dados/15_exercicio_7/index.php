<?php

    $pessoa = ['nome' => 'Marcos', 'idade' => 22, 'profissao' => 'Engenheiro', 'graduacao' => 'Engenharia de Controle e Automação'];

    print_r($pessoa);
    echo"<br>";

    $maioridade = 18;

    if ($pessoa['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade! <br>";
    }