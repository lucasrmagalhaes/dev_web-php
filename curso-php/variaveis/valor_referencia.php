<div class="titulo">Valor vs Referência</div>

<?php
$variavel = 'valor inicial';
echo $variavel; // valor inicial

// Atribuição por Valor
$variavelValor = $variavel;
echo "<br>$variavelValor"; // valor inicial
$variavelValor = 'novo valor';
echo "<br>$variavel"; // valor inicial
echo " $variavelValor"; // 'novo valor';

// Atribuição por Referência
$valorReferencia = &$variavel;
$valorReferencia = 'mesma referencia';
echo "<br>$variavel $valorReferencia"; // mesma referencia mesma referencia