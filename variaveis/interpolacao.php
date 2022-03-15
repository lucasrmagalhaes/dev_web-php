<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero; // 10
echo '<br> $numero'; // $numero
echo "<br> $numero"; // 10

$texto = "A sua note é: $numero";
echo "<br>$texto"; // A sua note é: 10

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos"; // Eu tenho 5
echo "<br>Eu tenho 5 {$objeto}s."; // Eu tenho 5 canetas.