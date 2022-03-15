<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = ['Laranja', 'Abacaxi'];
// FRUTAS[0] = 'Banana'; // Não funciona
// FRUTAS[] = 'Banana'; // Não funciona
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
echo '<br>' . CIDADES[1];