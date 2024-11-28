<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltlink> HTML</h1>
    <p>A tag <code>&ltlink></code> é um elemento autocontido em HTML usado para estabelecer links entre o documento
        atual e recursos externos.
        Ela é comumente usada no <code>&lthead></code> de um documento HTML para incluir arquivos de estilo CSS,
        favicons ou outros tipos de recursos.</p>

    <hr>

    <h2>Atributos Principais da Tag &ltlink></h2>
    <ul>
        <li>
            <code>rel</code> (Obrigatório):
            Define o relacionamento entre o documento HTML e o recurso vinculado. Exemplos de valores:
            <ul>
                <li><code>stylesheet</code>: Conecta uma folha de estilo CSS.</li>
                <li><code>icon</code>: Define o ícone da página (favicon).</li>
                <li><code>preload</code>: Precarrega um recurso.</li>
                <li><code>alternate</code>: Indica uma versão alternativa do conteúdo.</li>
            </ul>
            <div class="code">
                <pre>
&ltlink <em>rel="stylesheet"</em> href="styles.css">
&ltlink <em>rel="icon"</em> href="favicon.ico"></pre>
            </div>
        </li>

        <li>
            <code>href</code> (Obrigatório): Especifica o caminho para o recurso vinculado.
            <div class="code">
                <pre>&ltlink rel="stylesheet" <em>href="https://example.com/styles.css"</em>></pre>
            </div>
        </li>

        <li>
            <code>type</code>: Define o tipo do recurso vinculado (geralmente usado para arquivos CSS ou ícones).
            <div class="code">
                <pre>&ltlink rel="stylesheet" href="styles.css" <em>type="text/css"</em>></pre>
            </div>
        </li>

        <li>
            <code>media</code>: Especifica para qual tipo de mídia o recurso é destinado, como tela, impressão, etc.
            <div class="code">
                <pre>&ltlink rel="stylesheet" href="print.css" <em>media="print"</em>></pre>
            </div>
        </li>

        <li>
            <code>sizes</code>: Define os tamanhos do ícone vinculado.
            <div class="code">
                <pre>&ltlink rel="icon" href="favicon-32x32.png" <em>sizes="32x32"</em>></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Usos Comuns da Tag &ltlink></h2>
    <ul>
        <li>
            <strong>Conectar uma Folha de Estilo CSS</strong>
            <div class="code">
                <pre>&ltlink rel="stylesheet" href="styles.css"></pre>
            </div>
        </li>

        <li>
            <strong>Definir o Favicon</strong>
            <div class="code">
                <pre>&ltlink rel="icon" href="favicon.ico" type="image/x-icon"></pre>
            </div>
        </li>

        <li>
            <strong>Adicionar Fontes Externas</strong>
            <div class="code">
                <pre>&ltlink rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"></pre>
            </div>
        </li>

        <li>
            <strong>Precarregar Recursos</strong>:
            Precarrega arquivos importantes antes que o navegador os necessite, como fontes ou imagens.
            <div class="code">
                <pre>&ltlink rel="preload" href="font.woff2" as="font" type="font/woff2" crossorigin="anonymous"></pre>
            </div>
        </li>

        <li>
            <strong>Alternativas de Idioma</strong>: Indica uma versão alternativa do documento em outro idioma.
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltlink></h2>
    <ul>
        <li>
            <strong>Declare sempre o atributo rel</strong>:
            Ele é fundamental para indicar o propósito do recurso vinculado.
        </li>
        <li>
            <strong>Otimize o carregamento com preload</strong>:
            Use o rel="preload" para arquivos críticos, como fontes ou imagens.
        </li>
        <li>
            <strong>Verifique os caminhos do href</strong>:
            Certifique-se de que o caminho para o arquivo vinculado esteja correto.
        </li>
        <li>
            <strong>Escolha o media correto</strong>:
            Use o atributo media para carregar estilos específicos, como folhas de estilo para impressão.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltlink></code> é essencial para conectar documentos HTML a recursos externos. Seu uso correto
        melhora o desempenho e a apresentação do site, além de proporcionar uma experiência mais rica ao usuário.</p>
</div>

<?php
include_once '../footer.php';
?>