<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltq> HTML</h1>
    <p>A tag <code>&ltq></code> é usada para marcar uma citação curta em HTML. Por padrão, os navegadores adicionam
        aspas ao redor do conteúdo da tag <code>&ltq></code>, indicando que o texto é uma citação.</p>

    <div class="code">
        <pre>&ltp>Albert Einstein disse: &ltq>A imaginação é mais importante que o conhecimento.&lt/q>&lt/p></pre>
    </div>

    <p>Albert Einstein disse: <q>A imaginação é mais importante que o conhecimento.</q></p>

    <hr>

    <h2>Características Principais da Tag &ltq></h2>
    <ul>
        <li><strong>Citação Curta</strong>: Ideal para pequenos trechos de citações. Para citações mais longas, deve-se
            usar a tag <code>&ltblockquote></code>.</li>
        <li><strong>Aspas Automáticas</strong>: Navegadores adicionam aspas ao redor do texto automaticamente. O estilo
            e o formato das aspas podem variar de acordo com o idioma configurado na página ou nos estilos
            personalizados.</li>
        <li><strong>Semântica</strong>: Indica ao navegador e aos leitores de tela que o conteúdo é uma citação.</li>
    </ul>

    <hr>

    <h2>Atributo cite</h2>
    <p>O atributo <code>cite</code> é usado para indicar a URL ou a fonte da citação.</p>
    <div class="code">
        <pre>
&ltp>
    Conforme dito por Albert Einstein: 
    &ltq <em>cite="https://example.com/einstein-quotes"</em>>A imaginação é mais importante que o conhecimento.&lt/q>
&lt/p></pre>
    </div>

    <hr>

    <h2>Diferença entre &ltq> e &ltblockquote></h2>
    <ul>
        <li><strong>Tag &ltq></strong>: Para citações curtas e embutidas no texto.</li>
        <li><strong>Tag &ltblockquote></strong>: Para citações longas, geralmente exibidas como um bloco separado.</li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltq></h2>
    <ul>
        <li>
            <strong>Use Apenas para Citações Curtas</strong>:

            Reserve o uso de <code>&ltq></code> para citações curtas, que façam sentido no fluxo do texto.
        </li>
        <li>
            <strong>Combine com o Atributo cite</strong>:

            Sempre que possível, forneça a fonte da citação utilizando o atributo <code>cite</code>.
        </li>
        <li>
            <strong>Estilize com Clareza</strong>:

            Personalize as aspas ou o estilo do texto para que as citações se destaquem visualmente.
        </li>
        <li>
            <strong>Considere o Contexto do Idioma</strong>:

            Certifique-se de que o idioma do documento está configurado corretamente para exibir o formato correto de
            aspas (ex.: <code>lang="pt-BR"</code> para aspas em português).
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltq></code> é uma ferramenta semântica e visual útil para representar citações curtas. Seu uso
        correto enriquece o significado do conteúdo, melhora a acessibilidade e organiza o texto de forma mais clara
        para o usuário. Combinada com boas práticas e personalizações de estilo, pode criar uma experiência visual e
        semântica consistente em páginas HTML.</p>
</div>

<?php
include_once '../footer.php';
?>