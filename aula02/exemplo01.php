<?php
    $a = 10;
    $b = 5;

    $soma = $a +$b;
    echo"<strong>Exemplo 1</strong> <br>";
    echo"A soma é: $soma";
    echo"<hr>";

    //ESTRUTURAS CONDICIONAIS
    //IF
    echo"<strong>Exemplo 2</strong> <br>";
    if ($b > $a) {
        echo"B é maior que A";
    }else{
        echo"B não é maior que A";
    }
    echo"<hr>";

    echo"<strong>Exemplo 3</strong> <br>";

    $n1=4;
    $n2=5;
    $n3=6;
    $media = ($n1+$n2+$n3)/3;

    if($media>5){
        echo"Sua média:$media<br>Aprovado";
    }elseif($media<4){
        echo"Sua média:$media<br>Reprovado";
    }else{
        echo"Sua média:$media<br>Recuperação";
    }
    echo"<hr>";

    //SWITCH CASE

    echo"<strong>Exemplo 4</strong> <br>";
    
    $dia=21;
    switch ($dia) {
        case 1:
            echo"Domingo";
            break;
        case 2:
            echo"Segunda";
            break;
        case 3:
            echo"Terça";
            break;
        case 4:
            echo"Quarta";
            break;
        case 5:
            echo"Quinta";
            break;
        case 6:
            echo"Sexta";
            break;
        case 7:
            echo"Sábado";
            break;
        
        default:
            echo"Número Inválido!";
            break;
    }
    
    echo"<hr>";

    //LAÇO DE REPETIÇÃO
    //FOR

    echo"<strong>Exemplo 5</strong> <br>";

    for ($i=0; $i <= 10; $i++) { 
        echo" $i - ";
    }
    echo"<hr>";

    //WHILE
    echo"<strong>Exemplo 6</strong> <br>";
    $a = 1;
    while ($a <= 10) {
        echo" $a - ";
        $a++;
    }
    echo"<hr>";

    //DO WHILE
    echo"<strong>Exemplo 7</strong> <br>";
    $x = 1;
    do{
        echo" $x -";
        $x++;
    } while($x <=10);

    echo"<hr>";

    //FOREACH
    echo"<strong>Exemplo 9</strong> <br>";
    
    $nomes = ['Taylor','Justin','Katy','Dylan'];
    
    echo"$nomes[1]";

    echo"<hr>";

    echo"<strong>Exemplo 10</strong> <br>";
        
    $qtde = count($nomes);
    for ($n=0; $n < $qtde-1; $n++) { 
        echo $nomes[$n] . "<br>";
    }

    echo"<hr>";

   
    echo"<strong>Exemplo 11</strong> <br>";
        
    foreach ($nomes as $nome) {
        echo"$nome <br>";
    }

    echo"<hr>";

?>