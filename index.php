<?php
session_start();

if ($_COOKIE['usuario']) {
  $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if (!$_SESSION['usuario']) {
  header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.google.com/share?selection.family=Open%20Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    
    <title>Curso PHP</title>
  </head>

  <body>
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Índice dos Exercícios</h2>
    </header>

    <nav class="navegacao">
      <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
      
      <a class="vermelho" href="logout.php">Sair</a>
    </nav>
    
    <main class="principal">
      <div class="conteudo">
        <?php require_once('menu.php'); ?>
      </div>
    </main>
    
    <footer class="rodape">
      LUCAS MAGALHÃES © <?= date('Y') ?>
    </footer>
  </body>
</html>