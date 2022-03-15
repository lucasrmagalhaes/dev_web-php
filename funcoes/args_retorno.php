<div class="titulo">Argumentos & Retorno</div>

<?php
function obterMensagem() {
    return 'Seja bem-vindo(a)!';
}

$mensagem = obterMensagem();

echo $mensagem; // Seja bem-vindo(a)!

echo '<br>', var_dump(obterMensagem()); // string(18) "Seja bem-vindo(a)!"

function obterMensagemComNome($nome) {
    return "Bem-vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Lucas'); // Bem-vindo, Lucas!

function soma($a, $b) {
    return $a + $b;
}

echo '<br>', soma(4, 5); // 9

$x = 4;
$y = 5;

echo '<br>', soma($x, $y); // 9

function trocaValor($a, $novoValor) {
    $a = $novoValor;
}

$variavel = 1;

trocaValor($variavel, 3);

echo '<br>', $variavel; // 1

function trocaValorDeVerdade(&$a, $novoValor) {
    $a = $novoValor;
}

trocaValorDeVerdade($variavel, 5000);

echo '<br>', $variavel; // 5000