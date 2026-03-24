<?php

    //TRABALHANDO COM ARRAY

    function mostra_array($vetor){
        foreach ($vetor as $valor ) {
            echo $valor . "<br>";
        }
    }

    function mostra_um($vetor2,$pos){
        echo $vetor2[$pos];
    }

    $numeros =[1,2,3,4,5];
    $nomes =["Gabi","Osvaldo"];


    mostra_array($numeros);
    echo"<hr>";
    mostra_array($nomes);
    echo"<hr>"; 
    mostra_um($nomes,1);


?>
