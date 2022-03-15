<div class="titulo">Inserir Registros #01</div>


<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
  'Marieta',
  '1989-10-29',
  'marieta123@email.com.br',
  'https://marieta123.sites.com.br',
  2,
  13000.87
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
  echo "Dados inseridos com sucesso!";
} else {
  echo "Erro: " . $conexao->error;
}

$conexao->close();