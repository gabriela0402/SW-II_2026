<?php
    $conteudo = file_get_contents("dado2.json");
    
    $dados = json_decode($conteudo, true);

    if (!$dados) { $dados = []; }

    $novo = ["produto" => "Teclado", "preco" => "100", "estoque" => 5];

    $dados[]= $novo;

    $json = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("dado2.json", $json);
    print_r($dados);
?>