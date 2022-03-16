<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
    echo "<span>Soma1: $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>'; // Soma 1 + 2 = 3
echo somar1(1.7 , 2.5) . '<br>'; // Soma 1.7 + 2.5 = 4.2
// echo somar1(1, '4dois') . '<br>'; // Soma1: 1 + 4dois = 5 - Notice: A non well formed numeric value encountered in

function somar2(int $a, int $b) {
    echo "<span>Soma2: $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>'; // Soma 1 + 2 = 3
echo somar2(1.7 , 2.5) . '<br>'; // Soma2: 1 + 2 = 3
// echo somar2(1, '4dois') . '<br>'; // Soma2: 1 + 4 = 5 - Notice: A non well formed numeric value encountered in

function somar3($a, $b): int {
    echo "<span>Soma3: $a + $b = </span>";
    return $a + $b;
}

echo somar3(1, 2) . '<br>'; // Soma3: 1 + 2 = 3
echo somar3(1.7 , 2.5) . '<br>'; // Soma3: 1.7 + 2.5 = 4
// echo somar3(1, '4dois') . '<br>'; // Soma3: 1 + 4dois = 5 - Notice: A non well formed numeric value encountered in