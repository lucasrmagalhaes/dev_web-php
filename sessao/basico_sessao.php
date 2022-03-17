<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION); // Array ( [nome] => Lucas )
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Lucas';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'lucasdarosa.ti@gmail.com';
}

print_r($_SESSION); // Array ([nome] => Lucas [email] => lucasdarosa.ti@gmail.com) - Undefined index: email 
?>

<p>
    <a href="/sessao/basico_sessao_alterar.php">Alterar Sessão</a>
</p>