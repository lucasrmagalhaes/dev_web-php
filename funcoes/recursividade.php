<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }

    return $soma;
}

echo somaUmAte(5) . '<br>'; // 15

function somaRecursivaUmAte($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(5) . '<br>'; // 15