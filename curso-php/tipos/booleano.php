<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(False);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false); 
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas zero é false
echo '<br>' . var_dump((bool) 20); // true
echo '<br>' . var_dump((bool) -1); // true
echo '<br>' . var_dump((bool) 0.0); // false
echo '<br>' . var_dump((bool) 0.00000001); // true
echo '<br>' . var_dump((bool) ""); // false
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // true 
echo '<br>' . var_dump((bool) "00"); // true
echo '<br>' . var_dump((bool) "false"); // true

echo '<br>' . var_dump(!!"false"); // true

