<?php
    $numHoras = readline("Digite o número de horas trabalhadas");
    $valorSal = readline("Digite o valor do salário mínimo");

    $valorHora = $valorSal / 8;
    $salFinal = $numHoras * $valorHora;
    $valeTransp = 0.06 * $salFinal;
    $valeAlim = 0.1 * $salFinal;
    $salLiq = $salFinal - ($valeTransp + $valeAlim);

    echo "Seu salário bruto é: R$ $salFinal, e seu salário líquido é R$ $salLiq. Tendo R$ $valeTransp de transporte e R$ $valeAlim de alimentação.";

?>