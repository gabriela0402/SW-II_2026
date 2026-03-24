<?php

    function gerarTabuada($n){
        for ($i=0; $i < 11; $i++) { 
            $res = $n * $i;
            echo "$n X $i = $res <br>";
        }
    }

    gerarTabuada(2);


?>