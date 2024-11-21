<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdiv> HTML</h1>

    <p>A tag <code>&ltdiv></code> (division) é um dos elementos mais utilizados no HTML. Ela é uma tag de bloco
        genérica, usada para agrupar elementos de conteúdo, sem adicionar semântica especial ao conteúdo dentro dela.
        Seu principal uso é criar contêineres que podem ser manipulados com CSS e JavaScript para estilização e
        comportamento dinâmico.</p>

    <p>A <code>&ltdiv></code> é uma tag puramente estrutural, ou seja, sozinha, ela não oferece estilo ou função
        especial, mas é muito poderosa quando combinada com CSS e JavaScript.</p>

    <div class="code">
        <pre>
&ltdiv>
    &ltp>Este é um parágrafo dentro de uma div.&lt/p>
&lt/div></pre>
    </div>

    <p>Nesse exemplo, o <code>&ltdiv></code> agrupa o parágrafo, mas não altera seu estilo ou comportamento por conta
        própria.</p>

    <hr>

    <h2>Usos comuns do &ltdiv></h2>
    <ul>
        <li>
            <strong>Agrupar conteúdo relacionado</strong>: Colocar elementos relacionados juntos dentro de uma <code>&ltdiv></code> para facilitar a
                aplicação de estilos.
        </li>
        <li>
            <strong>Criar layouts</strong>: Combinar múltiplas <code>&ltdiv></code> para construir layouts mais complexos como cabeçalhos, rodapés,
                colunas e seções.
        </li>
        <li>
            <strong>Aplicar estilos e comportamento com CSS e JavaScript</strong>: A <code>&ltdiv></code> permite que você aplique classes e ids
                para estilizar ou adicionar comportamento dinâmico a grupos de elementos.
        </li>
    </ul>

    <hr>

    <h2>Estilizando a &ltdiv> com CSS</h2>

    <p>Uma das razões mais poderosas para usar a <code>&ltdiv></code> é sua flexibilidade em ser estilizada com CSS. Veja um exemplo de como podemos aplicar CSS a uma <code>&ltdiv></code> para personalizar sua aparência:</p>

    <div class="code">
        <pre>
&ltdiv class="caixa">
    &ltp>Este conteúdo está dentro de uma caixa estilizada.&lt/p>
&lt/div>

&ltstyle>
  .caixa {
    border: 1px solid black;
    padding: 10px;
    background-color: lightgray;
  }
&lt/style></pre>
    </div>

    <hr>

    <h2>Acessibilidade e Semântica da &ltdiv></h2>

    <p>Um ponto importante a ser considerado ao usar <code>&ltdiv></code> é que ela <strong>não é uma tag semântica</strong>. Isso significa que, por si só, ela não fornece informações sobre o tipo de conteúdo que contém. Para melhorar a acessibilidade e o SEO de uma página, o ideal é usar tags semânticas como <code>&ltheader></code>, <code>&ltfooter></code>, <code>&ltarticle></code>, <code>&ltsection></code>, entre outras.</p>

</div>

<?php
include_once '../footer.php';
?>