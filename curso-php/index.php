<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.google.com/share?selection.family=Open%20Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800">
    <link rel="stylesheet" href="assets/css/estilo.css">
    
    <title>Curso PHP</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>4. Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=controle&file=if_else">If Else</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                        <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Lógicos</a></li>
                    </ul>
                </div>

                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>

                <div class="modulo vermelho">
                    <h3>2. Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=string">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_string">Desafio String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>

                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>

                <div class="modulo gold-escuro">
                    <h3>0. Regex</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=regex&file=regex">Regex</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    
    <footer class="rodape">
        LUCAS MAGALHÃES © <?= date('Y') ?>
    </footer>
</body>

</html>