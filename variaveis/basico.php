<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($soma); // 19

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros); // null

$variavel = 10;
echo '<br>' . $variavel; // 10

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel; // "Agora sou uma string!";

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>' . $_SERVER;
var_dump($_SERVER["HTTP_HOST"]); // Variáveis pré-definidas: https://www.php.net/manual/pt_BR/reserved.variables.php