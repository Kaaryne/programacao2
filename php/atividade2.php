<?php
    $valor = readline("Digite o valor da sua compra: ");
    if ($valor <= 100) {
        echo "sua compra possui 30 reais de frete";
        $falta = 201 - $valor;
        echo "falta R$ $falta reais para o frete grátis";
    }else if ($valor > 100 && $valor <= 200) {
        echo "sua compra possui 20 reais de frete";
        $falta = 201 - $valor;
        echo "falta R$ $falta reais para o frete grátis";
    }else if ($valor > 200) {
        echo "sua compra não possui frete";
    }
?>