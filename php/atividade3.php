<?php
    $cot = readline("Quanto vale em reais, 1 dólar(cotação)?");
    
    echo "
        1 - Dolár para Real\n
        2 - Real para Dólar\n";
    $op = readline("Digite a opção:");

    $valor = readline("Digite o valor da moeda escolhida: ");

    if ($op == 1) {
        $conv = $valor * $cot;
        echo "$ $valor em reais é R$ $conv";
    }
    else if ($op == 2){
        $conv = $valor / $cot;
        echo "R$ $valor em reais é $ $conv";
    }
?>