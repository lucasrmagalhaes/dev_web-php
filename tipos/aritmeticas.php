<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';

var_dump(1 + 1);

echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';

echo intdiv(7, 4), '<br>';
echo round(7 / 4), '<br>';

echo 7 % 4, '<br>';
echo 7 / 0, '<br>'; // Infinito

// echo intdiv(7, 0); # erro!

echo 4 ** 2, '<br>'; // 4 * 4 = 16

// Precedência de operadores:
// () => ** => / * % => + -

echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;