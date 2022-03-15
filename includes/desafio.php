<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

ini_set('display_errors', 1);

$usuario = new Usuario('Lucas Magalhães', 21, 'lucasrmagalhaes');
echo $usuario->apresentar();

unset($usuario);