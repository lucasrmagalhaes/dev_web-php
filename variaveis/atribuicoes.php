<div class="titulo">Atribuições</div>

<?php
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero; // 10
$numero = $numero - 3;
echo '<br>' . $numero; // 7
$numero = $numero + 1.5;
echo '<br>' . $numero; // 8.5
$numero--; // $numero = $numero - 1;
echo '<br>' . $numero; // 7.5;
--$numero;
echo '<br>' . $numero; // 6.5;
$numero++; // $numero = $numero + 1;
echo '<br>' . $numero; // 7.5;
++$numero;
echo '<br>' . $numero; // 8.5;

$numero = 20;

$numero -= 5;
echo '<br>' . $numero; // 15
$numero += 5;
echo '<br>' . $numero; // 20
$numero *= 10;
echo '<br>' . $numero; // 200
$numero /= 2;
echo '<br>' . $numero; // 100
$numero %= 6;
echo '<br>' . $numero; // 4
$numero **= 4;
echo '<br>' . $numero; // 256
$numero .= 4; // apenas concatenação!
echo '<br>' . $numero; // 2564

$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

// $variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default';
echo '<br>' . $valor;