<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lthtml> HTML</h1>

    <p>A tag <code>&lthtml></code> é o elemento raiz de um documento HTML. Todo o conteúdo da página, como texto,
        imagens, tabelas e scripts, está contido dentro dessa tag.
        Ela define a estrutura básica de um documento HTML e é a primeira tag que deve aparecer no código após a
        declaração do tipo de documento (<code>&lt!DOCTYPE html></code>).</p>

    <div class="code">
        <pre>
&lt!DOCTYPE html>
<em>&lthtml></em>
    &lthead>
        &lttitle>Minha Página&lt/title>
    &lt/head>
    &ltbody>
        &lth1>Bem-vindo ao meu site&lt/h1>
        &ltp>Este é um parágrafo de exemplo.&lt/p>
    &lt/body>
<em>&lt/html></em></pre>
    </div>

    <hr>

    <h2>Função da Tag &lthtml></h2>
    <ul>
        <li>
            <strong>Elemento Raiz</strong>:
            Todo o conteúdo da página é encapsulado dentro da tag <code>&lthtml></code>.
            Ela informa ao navegador que o código dentro dela deve ser interpretado como HTML.
        </li>
        <li>
            <strong>Organização do Documento</strong>:

            O elemento <code>&lthtml></code> contém dois filhos principais:
            <ul>
                <li><code>&lthead></code>: Contém informações meta sobre a página, links para estilos, scripts e o
                    título da aba.</li>
                <li><code>&ltbody></code>: Contém o conteúdo visível da página, como textos, imagens, e botões.</li>
            </ul>
        </li>
    </ul>

    <hr>

    <h2>Atributos da Tag &lthtml></h2>
    <p>A tag <code>&lthtml></code> pode ter alguns atributos importantes, como:</p>

    <ul>
        <li>
            <code>lang</code> (Idioma):
            <p>Define o idioma principal do conteúdo da página.
                Isso ajuda motores de busca e leitores de tela a interpretar o idioma da página corretamente.</p>
            <div class="code">
                <pre>
&lthtml <em>lang="pt-BR"</em>>
    <span class="comentario">&lt!-- Conteúdo em português do Brasil --></span>
&lt/html></pre>
            </div>
        </li>
        <li>
            <code>dir</code> (Direção do Texto):
            <p>Controla a direção do texto:</p>
            <ul>
                <li><code>ltr</code> (da esquerda para a direita): Padrão para idiomas como português e inglês.</li>
                <li><code>rtl</code> (da direita para a esquerda): Usado para idiomas como árabe e hebraico.</li>
            </ul>
            <div class="code">
                <pre>
&lthtml lang="ar" <em>dir="rtl"</em>>
    <span class="comentario">&lt!-- Conteúdo em árabe --></span>
&lt/html></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Hierarquia do Documento HTML</h2>
<p>Dentro da tag <html>, os elementos principais são organizados assim:</p>

<ul>
    <li>
        <strong>Cabeçalho</strong> (<code>&lthead></code>):
        <p>Contém metadados sobre a página, como:</p>
        <ul>
            <li><code>meta</code>: Informa charset, viewport e outras configurações.</li>
            <li><code>title</code>: Define o título exibido na aba do navegador.</li>
            <li><code>link</code>: Links para arquivos externos, como CSS e JavaScript.</li>
        </ul>
    </li>
    <li>
        <strong>Corpo</strong> (<code>&ltbody></code>):
        
        <p>
            Contém o conteúdo visível para os usuários: <br>
            Cabeçalhos, parágrafos, imagens, tabelas, links, etc.
        </p>
    </li>
</ul>

<hr>

<h2>Diferença Entre HTML e XHTML</h2>
<p>Embora a tag <code>&lthtml></code> seja usada em ambos, há diferenças na sintaxe:</p>

<ul>
    <li>
        <strong>HTML5</strong>:
        Mais permissivo, não requer fechamento explícito de algumas tags (como <code>&ltimg></code> ou <code>&ltinput></code>).
    </li>
    <li>
        <strong>XHTML</strong>:
        Mais rigoroso, todas as tags precisam ser fechadas.
    </li>
</ul>

<p>Exemplo de HTML5:</p>
<div class="code">
    <pre>
&lthtml>
    &ltbody>
        &ltimg src="imagem.png" alt="Exemplo">
    &lt/body>
&lt/html></pre>
</div>

<p>Exemplo de XHTML:</p>
<div class="code">
    <pre>
&lthtml <em>xmlns="http://www.w3.org/1999/xhtml"</em>>
    &ltbody>
        &ltimg src="imagem.png" alt="Exemplo" <em>/</em>>
    &lt/body>
&lt/html></pre>
</div>
</div>

<?php
include_once '../footer.php';
?>