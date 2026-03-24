<?php
    function gerarFatorial($num){
        $r = 1;
        for ($i=1; $i <= $num ; $i++) { 
            $r*= $i;
        }
        return $r;
    }

    echo gerarFatorial(5);
?>