<div class="titulo">Desafio String</div>

<?php
/**
 * Enunciado:
 *  Avaliando os métodos da documentação da string,
 * qual o método que a posição do texto 'abc' na
 * string '!AbcaBcabc' retorne 1.
 */

echo strpos('!AbcaBcabc', 'abc') . '<br>'; // 7
echo stripos('!AbcaBcabc', 'abc'); // 1