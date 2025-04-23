<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container mt-5 w-75 m-auto">
    <?php
        $churrasco = 
        [
            ["ingrediente"=>"carne", "quantidade"=>20, "valorUnitario"=>45],
            ["ingrediente"=>"sal", "quantidade"=>1, "valorUnitario"=>4],
            ["ingrediente"=>"carvão", "quantidade"=>5, "valorUnitario"=>6],
            ["ingrediente"=>"pão", "quantidade"=>100, "valorUnitario"=>1.5]
        ];
    ?>    
<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ingrediente</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $total =0;
                for ($i=0; $i < count($churrasco) ; $i++) { 
                    $total += ($churrasco[$i]['valorUnitario'] * $churrasco[$i]['quantidade']);
            ?>
                <tr>
                    <td><?=$i + 1?></td>
                    <td><?=$churrasco[$i]['ingrediente']?></td>
                    <td><?=$churrasco[$i]['quantidade']?></td>
                    <td><?=number_format($churrasco[$i]['valorUnitario'], 2, decimal_separator:',')?></td>
                    <td><?=number_format($churrasco[$i]['valorUnitario'] * $churrasco[$i]['quantidade'],decimals: 2, decimal_separator:',')?></td>
                </tr>
            <?php
                }
            ?>
            <tr>

            </tr>
        </tbody>
        <tr></tr>
    </table>
    <h3>O total gasto no churrasco foi R$<?=number_format($total ,decimals: 2, decimal_separator:',')?></h3>
</body>
</html>