<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2; // Primeira váriavel tem prioridade
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos);

echo '<br>';
$indice = array_rand($dadosCompletos);
echo "$indice = $dadosCompletos[$indice]";

echo '<br>';
echo "{$dadosCompletos['idade']}";
echo '<br>';
echo "${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos); // Remover um elemento ou o array
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais); // Array ( [0] => 0 [1] => 2 [2] => 4 [3] => 6 [4] => 8 )

$decimais = array_merge($pares, $impares); // Juntar dois arrays
echo '<br>';
print_r($decimais); // Array ( [0] => 0 [1] => 2 [2] => 4 [3] => 6 [4] => 8 [5] => 1 [6] => 3 [7] => 5 [8] => 7 [9] => 9 )

sort($decimais); // Ordenar a ordem da lista
echo '<br>';
print_r($decimais); // Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 [6] => 6 [7] => 7 [8] => 8 [9] => 9 )