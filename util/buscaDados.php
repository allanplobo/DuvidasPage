<?php
    $json = file_get_contents('assets/data/duvidas.json');
    $dados = json_decode($json, true);
    $dados = $dados['lista_tarefas'];