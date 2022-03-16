<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem-vindo, $nome $sobrenome! <br>";
}

echo saudacao(); // Bem-vindo, Senhor(a) Cliente!
echo saudacao(null); // Bem-vindo, Cliente!
echo saudacao(null, null); // Bem-vindo, !
echo saudacao('Mestre', 'Supremo'); // Bem-vindo, Mestre Supremo!

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');

/** 
 * Para comer: Hamburguer
 * Para beber: Água 
 */

anotarPedido('Pizza', 'Refrigerante');

/**
 * Para comer: Pizza
 * Para beber: Refrigerante
 */

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer'); // Não funciona

anotarPedido2('Refrigerante', 'Pizza');

/**
 * Para comer: Pizza
 * Para beber: Refrigerante
 */