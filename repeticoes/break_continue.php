<div class="titulo">Break/Continue</div>

<?php
$cont = 16;

for (;;) { // infinito
    echo "$cont <br>"; // 16, 17, 18, 19, 20

    $cont++;

    if ($cont > 20) {
        break;
    }
}

echo "<hr>";

for (;;) {
    $cont++;

    if ($cont % 2 === 1) {
        continue;
    }

    echo "$cont <br>"; // 22, 24, 26, 28, 30

    if ($cont >= 30) {
        break;
    }
}

echo "<hr>";

foreach (array(1, 2, 3, 4, 5, 6) as $valor) {
    if ($valor === 5) break;
    if ($valor % 2 === 0) continue;

    echo "$valor <br>"; // 1, 3
}