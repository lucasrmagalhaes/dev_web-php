<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS; // 5.9
echo '<br>' . $TAXA_DE_JUROS . '!'; // !
// TAXA_DE_JUROS = 2.5;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA; // 2.5

$valorVariavel = 2.8;
// define(NOVISSIMA_TAXA, $valorVariavel); // 2.8
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA; // 4

echo '<br>' . PHP_VERSION; // 7.4.16
echo '<br>' . PHP_INT_MAX; // 9223372036854775807

echo '<br>' . __LINE__; // 20
echo '<br>' . __FILE__;
echo '<br>' . __DIR__;


