<?php
    $valorDolar = readline("Qual o valor do dólar: ");
    $quantAgua = readline("Digite a quantidade de água e metros cúbicos consumida: ");

    $valorCubico = $valorDolar / 100;
    $valorTotal = $valorCubico * $quantAgua;
    $valorDesconto = $valorTotal - ($valorTotal * 0.12);

    echo "O valor total a pagar é $valorTotal. O valor a pagar com desconto é $valorDesconto";
?>
