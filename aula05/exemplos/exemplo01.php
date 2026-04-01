<?php
    //string json contendo os dados de um funcionário
    $json_str = '{"nome": "Jason Jones", "idade":38, "sexo": "M"}';

    //faz o parsing na string, gerando um objeto PHP
    $obj = json_decode($json_str);

    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    //imprime o conteúdo do objeto
    echo "nome: $obj->nome<br>";
    echo "idade: $obj->idade<br>";
    echo "sexo: $obj->sexo<br>";
?>