<?php
 $valor = 0;
 $j = 0;
    for ($i=0; $i <= 10 ; $i++) { 
        for ($j=0; $j <= 10; $j++) { 
            $valor = $i * $j;
            echo "$i X $j = $valor \n";
        }
        echo "\n";
        $j = 0;
    }
?>
