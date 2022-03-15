<div class="titulo">Desafio Impressão</div>

<!--
    Enunciado: 
    - Imprima apenas os valores do array que contém inidice par;
    - Resolver com for e foreach; e
    - Valores esperados: AAA, CCC e EEE.
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 === 1) continue;

    echo "{$array[$i]} "; // AAA, CCC, EEE
}

echo "<br>";

foreach ($array as $chave => $valor) {
    if ($chave % 2 !== 0) continue;

    echo "$valor "; // AAA, CCC, EEE
}