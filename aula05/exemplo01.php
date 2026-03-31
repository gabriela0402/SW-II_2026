<?php

    $json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';

    $obj = json_decode($json_str);

    echo"<pre>";
    var_dump($obj);
    echo"</pre>";
    
    echo "<hr>";

    echo "nome: $obj->nome<br>";
    echo "idade: $obj->idade<br>";
    echo "sexo: $obj->sexo<br>";

?>