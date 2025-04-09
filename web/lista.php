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
    <h2 class="text-center">Turmas da Info do IFC Videira</h2>
    <?php
    // 0 , 1 , 2 , 3 , 4 , 5
    $dados = ["Info2023A", "Info2023B", "Info2024A", "Info2024B", "Info2025A", "Info2025B"];
    $cores = ["text-warning", "text-danger", "text-primary", "text-secondary", "text-info", "text-success"];
    ?>
    <ul>
    <?php
    for ($i=0; $i < count(value: $dados); $i++) { 
    ?>
    <li class= "fs-2 <?=$cores[$i]?>"><?=$dados[$i]?></li>
    <?php
    }
    ?>
    </ul>
</body>
</html>