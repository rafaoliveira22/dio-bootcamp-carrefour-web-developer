<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#accordion" ).accordion();
        });
  </script>

    <style>
        body{
            min-height:100vh;
            display:flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
            font-family:'Arial';
        }
    </style>

    <title>HTML5 e CSS3 - AULA PRÁTICA 01</title>
</head>
<body>
    <h1>Construindo um Accordion</h1>

    <h2>Carrefour Web Developer</h2>
    <p>O Bootcamp Carrefour Web Developer tem como foco principal formar profissionais developers nas tecnologias JavaScript, ReactJS, JAVA e Springboot. Em parceria com o Carrefour, uma empresa multinacional que tem o compromisso de fornecer a mais ampla gama de produtos de qualidade e valor, tornando a frente da inovação para atender toda a gama de clientes e oportunidades no mundo em evolução em sistema operacional. Junto à DIO, traremos para você um programa com foco em desenvolvimento web. Aprofunde ainda mais o seu conhecimento em tecnologia, desenvolva seu raciocínio lógico e ainda construa projetos com entregáveis de código neste Bootcamp com os melhores experts do mercado.</p>

    <div id="accordion">
    <h3>Módulo I - Conteúdo de Abertura</h3>
    <div>
        <ul>
            <li>Pensamento Computacional</li>
            <li>Lógica de Programação Essencial</li>
            <li>Introdução ao Git e ao GitHub</li>
            <li>Curso  4</li>
        </ul>
    </div>
    <h3>Section 2</h3>
    <div>
    <ul>
        <li>Curso  1</li>
        <li>Curso  2</li>
        <li>Curso  3</li>
        <li>Curso  4</li>
        </ul>
    </div>
    <h3>Section 3</h3>
    <div>
        <ul>
            <li>Curso  1</li>
            <li>Curso  2</li>
            <li>Curso  3</li>
            <li>Curso  4</li>
        </ul>
    </div>
    <h3>Section 4</h3>
    <div>
        <ul>
            <li>Curso  1</li>
            <li>Curso  2</li>
            <li>Curso  3</li>
            <li>Curso  4</li>
        </ul>
    </div>
</div>

</body>
</html>