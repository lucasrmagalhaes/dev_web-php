<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais1 = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1); // Array ( [0] => 6 [1] => 7 [2] => 10 [3] => 7 )

echo '<br>';

$notasFinais2 = array_map(round, $notas);

print_r($notasFinais2); // Array ( [0] => 6 [1] => 7 [2] => 10 [3] => 7 )

$apenasOsAprovados1 = [];

foreach($notas as $nota) {
    if($nota >= 7) {
        $apenasOsAprovados1[] = $nota;
    }
}

echo '<br>';

print_r($apenasOsAprovados1); // Array ( [0] => 7.3 [1] => 9.8 )

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';

$apenasOsAprovados2 = array_filter($notas, aprovados);

print_r($apenasOsAprovados2); // Array ( [1] => 7.3 [2] => 9.8 )

function calculoLegal($nota) {
    $notaFinal = round($nota) + 1;

    return $notaFinal > 10 ? 10 : $notasFinal;
}

echo '<br>';

$notasFinais3 = array_map(calculoLegal, $notas);

print_r($notasFinais3); // Array ( [0] => [1] => [2] => 10 [3] => )