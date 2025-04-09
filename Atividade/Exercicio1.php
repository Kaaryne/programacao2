<?php
    $prova1 = readline("Digite a nota tirada na prova 1");
    $prova2 = readline("Digite a nota tirada na prova 2");
    $trabFinal = readline("digite a nota tirada no trabalho final");

    $media = ($prova1*3 + $prova2*3 + $trabFinal*4)/10;

    echo "Sua média foi $media";
    
    if ($media >= 7) {
        echo "Você foi aprovado!";
    }
    else if ($media >= 4 && $media < 6.9) {
        echo "Você está em recuperação";
    }
    else if ($media < 4) {
        echo "Você está reprovado";
    }
    //(nota*peso + nota*peso + nota*peso)/soma dos pesos
?>
