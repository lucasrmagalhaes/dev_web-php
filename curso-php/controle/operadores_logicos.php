<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p>Negação Lógica</p><hr>";
var_dump(true); // true
echo '<br>';
var_dump(!true); // not

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true); // true
var_dump(true && false); // false
var_dump(false && true); // false
var_dump(false && false); // false

var_dump(true and true); // true
var_dump(true and false); // false
var_dump(false and true); // false
var_dump(false and false); // false

echo "<p>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true); // true
var_dump(true || false); // true
var_dump(false || true); // true
var_dump(false || false); // false

var_dump(true or true); // true
var_dump(true or false); // true
var_dump(false or true); // true
var_dump(false or false); // false

echo "<p>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true xor true); // false
var_dump(true xor false); // true
var_dump(false xor true); // true
var_dump(false xor false); // false

var_dump(true != true); // false
var_dump(true != false); // true
var_dump(false != true); // true
var_dump(false != false); // false
?>

<style>
p {
    margin-bottom: 0px;
    font-weight: bold;
}

hr {
    margin-top: 0px;
}
</style>