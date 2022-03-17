<div class="titulo">Retornando uma Função</div>

<?php
function soma($a) {
    return function($b) use ($a) {
        return $a + $b;
    };
}

echo soma(3)(3); // 6