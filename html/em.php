<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltem> HTML</h1>

    <p>A tag <code>&ltem></code> significa "ênfase" e é usada no HTML para marcar texto que deve receber uma ênfase especial em relação ao restante do conteúdo. Em termos visuais, os navegadores geralmente renderizam o texto dentro de uma tag <code>&ltem></code> em itálico, mas a principal função da tag é <strong>indicar uma ênfase semântica</strong>. Isso significa que, além da aparência, ela também transmite ao navegador (e leitores de tela) que esse texto é importante ou enfatizado no contexto da frase.</p>

    <div class="code">
        <pre>&ltp>A linguagem <em>&ltem>HTML&lt/em></em> é fundamental para o desenvolvimento web.&lt/p></pre>
    </div>

    <p>A linguagem <em>HTML</em> é fundamental para o desenvolvimento web.</p>

    <hr>

    <h2>Acessibilidade e SEO</h2>

    <p>A tag <code>&ltem></code> melhora a acessibilidade e a semântica do conteúdo. Leitores de tela geralmente interpretam o conteúdo dentro de <code>&ltem></code> como sendo importante, o que pode ajudar pessoas com deficiências visuais a entenderem melhor o contexto. Além disso, como <code>&ltem></code> adiciona significado ao texto, pode melhorar a indexação semântica de páginas pelos mecanismos de busca, favorecendo o SEO (<em>Search Engine Optimization</em>).</p>
</div>

<?php
include_once '../footer.php';
?>