<div class="titulo">Regex</div>

<h4>Expressões Regulares:</h4>

<a href="https://regex101.com/">regex101</a>

<ul>
    <li>^ => Início de uma string.</li>
    <li>$ => Final de uma string.</li>
    <li>[A-Z] => Letras maiúsculas.</li>
    <li>[0-9] => Números.</li>
    <li>[A-Za-z] => Letras maiúsculas e minúsculas.</li>
    <li>[A-Za-z0-9] => Letras e números.</li>
    <li>/i => Case Insensitive para não diferenciar maiúsculas de minúsculas.</li>
    <li>? = {0,1} => Nenhuma ou uma ocorrência.</li>
    <li>* = {0,} => Nenhuma ou mais ocorrências.</li>
    <li>+ = {1,} => Uma ou mais ocorrências.</li>
    <li>{1} ou {1,10} => Definindo a quantidade de caracteres. (Mínimo e Máximo)</li>
    <li>[] => Conjunto de caracteres.</li>
    <li>. => Qualquer caractere, exceto nova linha.</li>
    <li>\d => Digitos (0-9)</li>
    <li>\D => Não é um digito (0-9)</li>
    <li>\w => Caracteres (a-z, A-Z, 0-9, _)</li>
    <li>\W => Não é um caracter.</li>
    <li>\s => Espaço em branco (space, tab, newline)</li>
    <li>\S => Não é um espaço em branco (space, tab, newline)</li>
    <li>\b => Limite de palavras</li>
    <li>\B => Não é um limite de palavra</li>
    <li>[] => Corresponde a caracteres entre colchetes</li>
    <li>[^ ] => Não corresponde a caracteres entre colchetes</li>
    <li>| => Ou</li>
    <li>( ) => Grupo</li>

</ul>

<?php
$string = "abc";
$padrao = "/^[a-z0-9]*$/i";

if (preg_match($padrao, $string)):
    echo "Válido", "<hr>", $string;
else:
    echo "Inválido";
endif;
