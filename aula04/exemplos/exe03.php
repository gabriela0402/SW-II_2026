<?php

    //FUNÇÃO COM PARÂMETRO E SEM RETORNO    

    function calcula_quadrado($a){
        $x = $a * $a;
        echo"O quadrado do número $a é $x <br>";
    }

    calcula_quadrado(23);
    calcula_quadrado(12);
    calcula_quadrado(17);

    echo"<hr>";

    function soma($x,$y){
        $soma = $x + $y;
        echo"A soma é: $soma <br>";
    }

    $n1 = 5;
    $n2 = 8;
    
    soma($n1,$n2);

?>