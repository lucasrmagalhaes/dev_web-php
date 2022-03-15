<div class="titulo">Função Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();

echo '<br>';

$variavel = 1;

function trocaValor() {
    $variavel = 2;

    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>"; // 1
trocaValor(); // 2
echo "Depois: $variavel <br>"; // 1

echo '<br>';

function trocaValorDeVerdade() {
    global $variavel;
    
    $variavel = 3;

    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>"; // 1
trocaValorDeVerdade(); // 3
echo "Depois: $variavel <br>"; // 3

echo '<br>';

// var_dump(trocaValorDeVerdade()); // null