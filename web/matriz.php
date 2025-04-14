    <?php
    //trocar isso...
        $ingredientes = ["carne", "sal", "carvão", "pão"];
        $quantidades = [20, 1, 5, 100];
        $valor = [25, 4, 6, 1.5];

    //por isso...
        $churrasco = 
        [
            ["ingrediente"=>"carne", "quantidade"=>20, "valorUnitario"=>45],
            ["ingrediente"=>"sal", "quantidade"=>1, "valorUnitario"=>4],
            ["ingrediente"=>"carvão", "quantidade"=>5, "valorUnitario"=>6],
            ["ingrediente"=>"pão", "quantidade"=>100, "valorUnitario"=>1.5]
        ];

        echo $churrasco[0]['valorUnitario'] , "\n";
        echo $churrasco[3]['ingrediente'] , "\n";
        
    ?>  