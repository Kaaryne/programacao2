<?php
    echo "
    1 - Dar uma mensagem de boas vindas!
    2 - Dar uma mensagem motivacional!
    3 - Dar um conselho!
    4 - Dar tchau!\n";
    ///////////////////////
    
    do{
        $op = readline("Digite o número: ");
        if ($op == 1) {
            echo "Bem Vindo(a)!";
        }else if ($op == 2) {
            echo "Faça sempre o seu melhor!";
        }else if ($op == 3) {
            echo "Às vezes, por mais difícil que seja, desistir é a única opção que vai determinar o seu fracasso definitivo.";
        }else {
            echo "Tchauu!";
        }
    }while($op!=4);
    ///////////////////////
?>