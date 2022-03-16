<div class="palindromo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    $ultimoIndice = strlen($palavra) - 1;

    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }

    return 'Sim';
}

echo palindromo('arara') . '<br>'; // Sim
echo palindromo('lucas') . '<br>'; // Não

function palindromoSimples($palavra) {
    return $palavra === strrev($palavra) ? 'Sim' : 'Não';
}

echo palindromo('arara') . '<br>'; // Sim
echo palindromo('lucas'); // Não