<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltiframe> HTML</h1>

    <p>A tag <code>&ltiframe></code> (abreviação de "<strong>inline frame</strong>") permite incorporar outra página
        HTML ou conteúdo em uma página principal. Com ela, é possível exibir elementos como:</p>

    <ul>
        <li>Vídeos (ex.: YouTube ou Vimeo).</li>
        <li>Mapas (ex.: Google Maps).</li>
        <li>Outros sites ou documentos HTML.</li>
    </ul>

    <div class="code">
        <pre>&ltiframe src="URL DO SITE">&lt/iframe></pre>
    </div>

    <iframe src="<?php echo $caminho ?>" width="90%" height="500px" loading="lazy" class="d-block m-auto"></iframe>

    <hr>

    <h2>Sintaxe da tag &ltiframe></h2>
    <div class="code">
        <pre>&ltiframe src="URL_DO_CONTEÚDO" width="LARGURA" height="ALTURA">&lt/iframe></pre>
    </div>
    <ul>
        <li><code>src</code>: URL do conteúdo que será exibido no iframe.</li>
        <li><code>width</code> e <code>height</code>: Controlam a largura e a altura do iframe, respectivamente.</li>
    </ul>

    <hr>

    <h2>Principais Atributos da Tag &ltiframe></h2>
    <ul>
        <li>
            <code>src</code>: Define a URL do conteúdo a ser exibido no iframe.
            <div class="code">
                <pre>&ltiframe <em>src="https://www.example.com"</em>>&lt/iframe></pre>
            </div>
        </li>
        <li>
            <code>width</code> e <code>height</code>: Especificam a largura e altura do iframe em pixels ou porcentagem.
            <div class="code">
                <pre>&ltiframe src="https://www.example.com" <em>width="800" height="600"</em>>&lt/iframe></pre>
            </div>
        </li>
        <li>
            <code>title</code>: Fornece uma descrição acessível para leitores de tela e melhora a acessibilidade.
            <div class="code">
                <pre>&ltiframe src="https://www.example.com" <em>title="Exemplo de iframe"</em>>&lt/iframe></pre>
            </div>
        </li>
        <li>
            <code>allowfullscreen</code>: Permite que o iframe seja exibido em tela cheia (geralmente usado em vídeos).
            <div class="code">
                <pre>&ltiframe src="https://www.youtube.com/embed/VIDEO_ID" <em>allowfullscreen</em>>&lt/iframe></pre>
            </div>
        </li>
        <li>
            <code>sandbox</code>: Adiciona restrições de segurança ao conteúdo dentro do iframe. <br> Exemplo: impedir
            scripts ou downloads.
            <div class="code">
                <pre>&ltiframe src="https://www.example.com" <em>sandbox</em>>&lt/iframe></pre>
            </div>
        </li>
        <li>
            <code>loading</code>: Controla o carregamento do iframe:
            <ul>
                <li><code>lazy</code>: Carrega o iframe apenas quando está visível no viewport.</li>
                <li><code>eager</code>: Carrega imediatamente.</li>
            </ul>
            <div class="code">
                <pre>&ltiframe src="https://www.example.com" <em>loading="lazy"</em>>&lt/iframe></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Problemas Comuns e Restrições</h2>
<ul>
    <li>
        <strong>Política de Segurança (CORS)</strong>:
        Nem todos os sites permitem ser incorporados via <code>&ltiframe></code>. Se o site tiver restrições de política de segurança (CORS), o iframe exibirá um erro.
    </li>
    <li>
        <strong>Compatibilidade</strong>:
        O conteúdo do iframe pode não funcionar corretamente em navegadores mais antigos ou se restrições de segurança forem aplicadas.
    </li>
    <li>
        <strong>Performance</strong>:
        Muitos iframes em uma página podem impactar o desempenho, especialmente em dispositivos móveis.
    </li>
</ul>

<hr>

<h2>Boas Práticas</h2>
<ul>
    <li>
        <strong>Aumente a Segurança com <code>sandbox</code></strong>:
        Evite que conteúdos maliciosos do iframe afetem sua página.
    </li>
    <li>
        <strong>Carregamento Sob Demanda</strong>:
        Use <code>loading="lazy"</code> para melhorar a performance em páginas com muitos iframes.
    </li>
    <li>
        <strong>Evite Muitos Iframes</strong>:
        Use com moderação para evitar problemas de performance e segurança.
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>