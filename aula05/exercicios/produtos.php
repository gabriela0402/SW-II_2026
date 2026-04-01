<?php
    
    $json_str = '{"produtos": '. 
    '[{"nome":"Esmalte", "preco":5, "quantidade": 20},'.
    '{"nome":"Ovo de páscoa", "preco":80, "quantidade": 18},'.
    '{"nome":"Óculos", "preco":200, "quantidade": 5}'.
    ']}';

    file_put_contents("produtos.json", $json_str);

    $dados = json_decode($json_str);
    $produtos = $dados->produtos;


    foreach ( $produtos as $e ){
        echo "nome: $e->nome - preco: $e->preco - quantidade: $e->quantidade<br/>";
    }
?>