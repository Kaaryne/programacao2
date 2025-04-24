<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class ="container mt-5 w-75 m-auto">
    <h3 class="text-center m-5">Lista de Tarefas</h3>
    <?php
        $tarefas = [
            ["titulo"=> "Revisar Código", "descricao"=> "Fazer revisão final do módulo de autenticação", "data_entrega"=> "2025-04-25", "status"=> "Pendente"],
            ["titulo"=> "Enviar relatório", "descricao"=> "Relatório semanal para o gestor", "data_entrega"=> "2025-04-20", "status"=> "Concluído"],
            ["titulo"=> "Backup do sistema", "descricao"=> "Fazer backup completo dos servidores", "data_entrega"=> "2025-04-18", "status"=> "Concluído"],
            ["titulo"=> "Atualizar dependências", "descricao"=> "Atualizar bibliotecas PHP no projeto", "data_entrega"=> "2025-04-27", "status"=> "Pendente"],
            ["titulo"=> "Responder e-mails", "descricao"=> "Responder mensagens pendentes da equipe", "data_entrega"=> "2025-04-24", "status"=> "Pendente"],
            ["titulo"=> "Reunião com cliente", "descricao"=> "Apresentar protótipo inicial", "data_entrega"=> "2025-04-22", "status"=> "Concluído"],
            ["titulo"=> "Testes automatizados", "descricao"=> "Criar scripts de testes para API", "data_entrega"=> "2025-04-26", "status"=> "Pendente"],
            ["titulo"=> "Planejar sprint", "descricao"=> "Definir tarefas da próxima iteração", "data_entrega"=> "2025-04-28", "status"=> "Pendente"],
            ["titulo"=> "Configurar CI/CD", "descricao"=> "Implementar integração contínua", "data_entrega"=> "2025-04-21", "status"=> "Concluído"],
            ["titulo"=> "Documentar endpoints", "descricao"=> "Adicionar documentação da API no README", "data_entrega"=> "2025-04-23", "status"=> "Concluído"],
        ]
    ?>
    <main class="w-100 m-auto">
        <div class="row d-flex justify-content-around">
            <?php
                for ($i=0; $i < count($tarefas) ; $i++) {
            ?>
                <div class="col-4 mb-5 px-5 ">
                    <div class="card " style="width: 25rem; height: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?=$tarefas[$i]['titulo']?></h5>
                            <p class="card-text"><?=$tarefas[$i]['descricao']?></p>
                            <p class="card-text">Data da Entrega: <?=$tarefas[$i]['data_entrega']?></p>
                            <?php
                                if ($tarefas[$i]['status'] == "Pendente") {
                            ?>
                                <p class="card-text bg-danger text-white fw-bold text-center rounded"><?=$tarefas[$i]['status']?></p>
                            <?php
                                }
                                else if ($tarefas[$i]['status'] == "Concluído") {
                            ?>
                                <p class="card-text bg-success text-white fw-bold text-center rounded"><?=$tarefas[$i]['status']?></p>
                            <?php
                                }
                            ?>
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