<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="container mt-5 w-75 m-auto">
    <h2 class="text-center bg-warning-subtle py-3 px-5 border border-2 rounded-2">Super loja</h2>
    <main>
        <div class="row m-auto text-center">
        <?php
            $produtos=["Sapato", "Bota", "Calça", "Saia", "Camisa", "Jaqueta"];
            $valores=[150, 400, 200, 100, 165, 300];
            $imagens=["sapato.webp", "Bota.webp", "calça.jpg", "saia.jpg", "camisa.jpg", "jaqueta.jpg"];
        ?>
            <?php
                for ($i=0; $i < count(value: $produtos); $i++) { 
            ?>
            <div class="col-4 mb-5">
                <div class="card" style="width: 18rem;">
                <img src="img/<?=$imagens[$i]?>" class="card-img-top tam-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$produtos[$i]?></h5>
                        <a href="https://www.amazon.com.br/s?k=<?=$produtos[$i]?>" class="btn btn-primary">R$<?=number_format($valores[$i],decimals: 2, decimal_separator:',')?></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            </div>
        </div>
    </main>
</body>
</html>