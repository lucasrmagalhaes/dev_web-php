<div class="titulo">Closuse & Callable</div>

<?php
$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . '<br>'; // 5
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // Sim

echo soma2(2, 3) . '<br>'; // 5
// echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>'; // Sim - Warning: Use of undefined constant soma2 - assumed 'soma2' (this will throw an Error in a future version of PHP)

var_dump($soma1); // object(Closure)#1 (1) { ["parameter"]=> array(2) { ["$a"]=> string(10) "" ["$b"]=> string(10) "" } }