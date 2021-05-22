<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="km-milha">Milha > Km</option>
        <option value="km-milha">Metros > Km</option>
        <option value="km-milha">Km > Metros</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
echo $_POST['param'] . '<br>';
echo $_POST['conversao'];