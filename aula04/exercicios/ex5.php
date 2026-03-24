<?php

    function somaArrays($vetor){
        $soma = 0;
        foreach ($vetor as $v) {
            $soma+=$v;
        }
        return $soma;
    }

    $numeros = [1,32,32,22];
    echo somaArrays($numeros);

?>