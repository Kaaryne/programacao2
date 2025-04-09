<?php
    $num = readline("De qual número você quer sua tabuada?");

    for ($i=0; $i <= 10; $i++) { 
        $valor = $num * $i;
        echo "$num X $i = $valor \n";
    }
?>