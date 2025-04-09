<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container mt-5 w-75">

    <header class="bg-warning">
        <h1 class="text-center fs-1 py-1">OOOOIIII</h1>
    </header>
    <?php
        $idade = $_GET['idd'];
        $nome = $_GET['nome'];
        $estado = $_GET['uf'];
        if ($idade >=18) {
    ?>
            <h3 class='text-center'>Seja bem-vindo, você de <?=$estado?></h3>
            <h4>Venha gastar no nosso site, <?=$nome?></h4>
            <h5>Se veio só de curioso, cai fora tmb!</h5>
    <?php
        }else{
    ?>
            <h3 class='text-danger'>Cai fora!</h3>
    <?php
        }
    ?>
</body>
</html>