<?php
session_start();

print_r($_SESSION);
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
    <b>E-mail: </b> <?= $_SESSION['email'] ?>
</p>

<?php
$_SESSION['email'] = 'lucas@gmail.com';
?>

<p>
    <a href='basico_sessao.php'>Voltar</a>
</p>

<p>
    <a href='basico_sessao_limpar.php'>Limpar Sessão</a>
</p>