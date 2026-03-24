<?php

    function gerarAleatorio(){
        $numeros = [];
        for ($i=0; $i <10 ; $i++) { 
            $sorteio = rand(1,50);
            $numeros[$i] = $sorteio;
        }

        foreach ($numeros as $n) {
            echo $n . "<br>";
        }
    }

    gerarAleatorio();

?>