<?php
/*
 Operadores matemáticos: + - * / $ **
 Operadores relacionais: == != > >= < <=
 Operadoes lógicos: || &&
*/

$nome = "Karyne";
$altura = 1.87;
$peso = 200;

//IMC = peso / altura ao quadrado
//Expoente: pow(base, expoente) -> pow(10,2) == 10^2;

$imc = $peso / ($altura ** 2);
$imc = number_format($imc, 2);

if ($imc < 18.5) {
    echo "$nome, seu imc é $imc. Você está Magro";
}else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "$nome, seu imc é $imc. Você está Saudável";
}else if ($imc >= 25.0 && $imc <= 29.9) {
    echo "$nome, seu imc é $imc. Você está Sobrepeso";
}else if ($imc >= 30.0 && $imc <= 34.9) {
    echo "$nome, seu imc é $imc. Você está Obesidade Grau I";
}else {
    echo "$nome, seu imc é $imc. Você está Obesidade Grau II";
}

//ímpar par
$x=7;
if ($x % 2 == 0) {
    echo "O número é par";
}else if ($x % 2 == 1) {
    echo "O número é ímpar";
}


?>