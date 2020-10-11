<?php
    $json = file_get_contents('data/duvidas.json');
    $dados = json_decode($json, true);
    $dados = $dados['lista_tarefas'];