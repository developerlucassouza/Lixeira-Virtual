<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltins> HTML</h1>
    <p>A tag <code>&ltins></code> é usada para marcar texto inserido em um documento. Visualmente, o texto dentro da tag
        <code>&ltins></code> geralmente aparece sublinhado, e sua semântica indica que o conteúdo foi adicionado ou
        modificado em comparação à versão anterior do documento.</p>

    <div class="code">
        <pre>&ltp>Este é um texto normal, <em>&ltins>e este texto foi inserido&lt/ins></em>.&lt/p></pre>
    </div>

    <p>Este é um texto normal, <ins>e este texto foi inserido</ins>.</p>

    <hr>

    <h2>Quando Usar a Tag &ltins></h2>
    <ul>
        <li>Para destacar adições em documentos revisados.</li>
        <li>Em colaborações de texto, para marcar conteúdos novos.</li>
        <li>Controle de versões de textos/documentos.</li>
        <li>Diferenças entre edições de contratos, artigos ou documentos legais.</li>
        <li>Informações adicionadas após uma revisão.</li>
    </ul>

    <hr>

    <h2>Atributos da Tag &ltins></h2>
    <p>A tag <code>&ltins></code> possui dois atributos globais específicos que ajudam a detalhar a inserção:</p>
    <ul>
        <li>
            <code>cite</code>: Especifica a URL de um documento ou fonte que justifica a adição.
            <div class="code">
                <pre>
&ltp>Esta informação foi adicionada recentemente: 
    <em>&ltins cite="https://exemplo.com/politicas"></em>nova política de privacidade&lt/ins>.
&lt/p></pre>
            </div>
        </li>
        <li>
            <code>datetime</code>: Indica a data e hora em que o conteúdo foi adicionado.
            <div class="code">
                <pre>
&ltp>Atualização realizada em 
    <em>&ltins datetime="2024-10-19T14:30"></em>novo horário de funcionamento&lt/ins>.
&lt/p></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas</h2>
<ul>
    <li>
        <strong>Use cite e datetime quando possível</strong>: Isso adiciona contexto semântico e melhora a rastreabilidade.
    </li>
    <li>
        <strong>Combine <code>&ltins></code> com <code>&ltdel></code> para versões claras</strong>: Ajuda a destacar alterações em textos.
    </li>
    <li>
        <strong>Evite usar <code>&ltins></code> para estilização simples</strong>: Utilize CSS diretamente para personalização visual.
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>