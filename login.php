<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if ($_POST['email']) {
  $usuarios = [
    [
      "nome" => "Lucas",
      "email" => "lucasdarosa.ti@gmail.com",
      "senha" => "123456"
    ],
    [
      "nome" => "Teste",
      "email" => "teste@gmail.com",
      "senha" => "123456"
    ]
  ];

  foreach ($usuarios as $usuario) {
    $emailValido = $email === $usuario['email'];
    $senhaValida = $senha === $usuario['senha'];

    if ($emailValido && $senhaValida) {
      $_SESSION['erros'] = null;
      $_SESSION['usuario'] = $usuario['nome'];

      header('Location: index.php');
    }
  }

  if (!$_SESSION['usuario']) {
    $_SESSION['erros'] = ['Usuário/Senha inválido!'];
  }
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
    <link rel="stylesheet" href="recursos/css/login.css">
    
    <title>Curso PHP</title>
  </head>

  <body class="login">
    <header class="cabecalho">
      <h1>Curso PHP</h1>
      <h2>Bem-vindo!</h2>
    </header>
    
    <main class="principal">
      <div class="conteudo">
        <h3>Identifique-se</h3>

        <?php if ($_SESSION['erros']): ?>
          <div class="erros">
            <?php foreach ($_SESSION['erros'] as $erro): ?>
              <p><?= $erro ?></p>
            <?php endforeach ?>
          </div>
        <?php endif ?>

        <form action="#" method="post">
          <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
          </div>

          <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
          </div>

          <button>Entrar</button>
        </form>
      </div>
    </main>
    
    <footer class="rodape">
      LUCAS MAGALHÃES © <?= date('Y') ?>
    </footer>
  </body>
</html>