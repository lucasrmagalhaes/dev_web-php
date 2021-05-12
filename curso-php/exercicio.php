<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.google.com/share?selection.family=Open%20Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/exercicio.css">
    
    <title>Exercício</title>
</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>

    <nav class="navegacao">
        <a href="" class="verde">Sem formatação</a>
        <a href="../index.php" class="vermelho">Voltar</a>
    </nav>
    
    <main class="principal">
        <div class="conteudo">
            <?php
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                // include("{$_GET['dir']}/{$_GET['file']}.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                // http://localhost:8080/curso-php/exercicio.php?dir=teste&file=teste
            ?>
        </div>
    </main>
    
    <footer class="rodape">
        LUCAS MAGALHÃES © <?= date('d/m/Y'); ?>
    </footer>
</body>

</html>