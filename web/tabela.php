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
        $ingredientes = ["carne", "sal", "carvão", "pão"];
        $quantidades = [20, 1, 5, 100];
        $valor = [25, 4, 6, 1.5];
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
                for ($i=0; $i < count($valor) ; $i++) { 
            ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            <?php
                }
            ?>
            <tr>

            </tr>
        </tbody>
        <tr></tr>
    </table>
</body>
</html>