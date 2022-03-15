<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1); // float 9.2233720368548E+18
echo '<br>';
var_dump(1 + 1.0); // float 2 
echo '<br>';
var_dump((float) 3); // float 3

// float para int
echo '<p>Float para int</p>';
var_dump((int) 6.8); // int 6
echo '<br>';
var_dump(intval(2.999)); // int 2
echo '<br>';
var_dump((int) round(2.8)); // int 3

// operações com string
echo '<p>Strings</p>';
var_dump(3 + "2"); // int 5
echo '<br>';
var_dump("3" + 2); // int 5
echo '<br>';
var_dump("3" . 2); // "32"
echo '<br>';
var_dump(1 + "cinco"); // 1
echo '<br>';
var_dump(1 + "5 cinco"); // 6
echo '<br>';
var_dump("cinco 5" + 1); // 1;
echo '<br>';
var_dump(1 + "2+5"); // 3
echo '<br>';
var_dump(1 + "3.2"); // 4.2
echo '<br>';
var_dump(1 + "-3.2e2"); // -319
echo '<br>';
var_dump((int) "10.5"); // 10
echo '<br>';
var_dump((float) "10.5"); // 10.5