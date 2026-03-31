<?php

    $dados =[
        "produto" => "Perfume",
        "preco" => 100,
        "estoque" =>20
    ];

    $json = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("dado2.json", $json);

?>