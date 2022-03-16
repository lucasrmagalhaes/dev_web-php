<div class="titulo">Funções Anônimas</div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>'; // 3

function executar($a, $b, $op, $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma); // 2 + 3 = 5

$multiplicacao = function ($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multiplicacao); // 2 * 3 = 6

function divisao($a, $b) {
    return $a / $b;
}

executar(9, 3, '/', divisao); // 9 / 3 = 3 - Warning: Use of undefined constant divisao - assumed 'divisao' (this will throw an Error in a future version of PHP)