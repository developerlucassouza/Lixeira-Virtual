<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltstyle> HTML</h1>

    <p>A tag <code>&ltstyle></code> é um elemento HTML usado para inserir regras de estilo CSS diretamente no documento HTML. Ela permite que você defina como os elementos da página devem ser exibidos, sem necessidade de um arquivo CSS externo.</p>

    <div class="code">
        <pre>
&lthead>
    &ltstyle>
        <span class="comentario">/* Aqui vão os estilos CSS */</span>
    &lt/style>
&lt/head></pre>
    </div>

    <p>Normalmente é colocada dentro do <code>&lthead></code></p>

    <div class="code">
        <pre>
&lt!DOCTYPE html>
&lthtml lang="en">
&lthead>
    &ltmeta charset="UTF-8">
    &ltmeta name="viewport" content="width=device-width, initial-scale=1.0">
    &lttitle>Tag style&lt/title>

    <em>&ltstyle></em>
        <em><span class="comentario">/* Aqui vão os estilos CSS */</span></em>
    <em>&lt/style></em>
&lt/head>
&ltbody>
    <span class="comentario">&lt!-- Conteúdo da Página --></span>
&lt/body>
&lt/html></pre>
    </div>

    <hr>

    <h2>Atributos da tag &ltstyle></h2>
<p>A <code>&ltstyle></code> possui um atributo específico importante, o atributo <code>type</code>, que define o tipo do conteúdo do <code>&ltstyle></code>. Por padrão o valor é <code>text/css</code></p>

<div class="code">
    <pre>
&ltstyle type="text/css">
    p { color: green; }
&lt/style></pre>
</div>

<hr>

<h2>Boas práticas com a tag &ltstyle></h2>
<ul>
    <li>Coloque <code>&ltstyle></code> dentro do <code>&lthead></code>.</li>
    <li>Prefira CSS externo para projetos grandes.</li>
    <li>Use CSS interno apenas quando for realmente necessário.</li>
    <li>Evite misturar estrutura (HTML), estilo (CSS) e comportamento (JS) no mesmo arquivo.</li>
</ul>

<hr>

<p>A tag <code>&ltstyle></code> é essencial para definir estilos diretamente no HTML, sendo uma ferramenta prática para prototipagem e testes rápidos. Porém, para aplicações maiores e mais organizadas, o ideal é separar o CSS em arquivos externos.</p>

</div>

<?php
include_once '../footer.php';
?>