<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltbody> HTML</h1>

    <p>A tag <code>&ltbody></code> representa o conteúdo visível de uma página web. Tudo o que é colocado dentro dessa
        tag será
        exibido no navegador do usuário. Ela é um dos elementos fundamentais de uma página web, pois define o corpo da
        página.
    </p>
    <div class="code">
        <pre>
&ltbody>
    <span class="comentario">&lt!-- Conteúdo visível vai aqui --></span>
&lt/body></pre>
    </div>

    <p>Exemplo:</p>

    <div class="code">
        <pre>
&ltbody>
    &lth1>Olá, mundo!&lt/h1>
    &ltp>Este é um parágrafo que será mostrado na página.&lt/p>
    &ltimg src="imagem.jpg" alt="Exemplo de imagem">
&lt/body></pre>
    </div>

    <hr>

    <h2>A Relação entre o &lthead> e o &ltbody></h2>

    <ul>
        <li>
            <strong>&lthead></strong> contém informações sobre o documento, como o título da página, links para arquivos
            CSS e JavaScript, e
            metadados que não são exibidos diretamente ao usuário.
        </li>
        <li>
            <strong>&ltbody></strong>, por outro lado, contém <strong>tudo o que é visível</strong> na página web.
        </li>
    </ul>
    <p>
        Essas duas partes trabalham juntas para criar uma página completa. O
        <code>&lthead></code> define a configuração e o estilo, enquanto o
        <code>&ltbody></code> mostra o conteúdo.
    </p>

    <hr>

    <p>A tag <code>&ltbody></code> é crucial na construção de uma página web, pois tudo o que vemos no navegador está dentro dela. Ao entender sua importância e como ela interage com o restante da estrutura HTML, podemos criar páginas bem organizadas e funcionais.</p>

</div>

<?php
include_once '../footer.php';
?>