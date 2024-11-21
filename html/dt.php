<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdt> HTML</h1>

    <p>A tag <code>&ltdt></code> significa "<em>Description Term</em>" (Termo de Descrição) e é usada dentro de uma
        lista de descrição (<code>&ltdl></code>) para representar o termo que será definido ou descrito. Junto com a tag
        <code>&ltdd></code>, que contém a descrição do termo, a tag <code>&ltdt></code> forma um par chave-valor para
        criar definições, glossários, ou listas de perguntas e respostas.</p>

    <p>A <code>&ltdt></code> deve ser sempre usada dentro de uma tag <code>&ltdl></code>, pois ela faz parte da
        estrutura semântica da lista de descrição. Cada <code>&ltdt></code> pode ser seguido por um ou mais
        <code>&ltdd></code>.</p>

    <hr>

    <h2>Estrutura básica da tag &ltdt></h2>

    <div class="code">
        <pre>
&ltdl>
    &ltdt>HTML&lt/dt>
    &ltdd>Uma linguagem de marcação usada para criar páginas web.&lt/dd>

    &ltdt>CSS&lt/dt>
    &ltdd>Folhas de estilo usadas para estilizar páginas web.&lt/dd>

    &ltdt>JavaScript&lt/dt>
    &ltdd>Uma linguagem de programação usada para adicionar interatividade às páginas web.&lt/dd>
&lt/dl></pre>
    </div>

    <dl class="ml-20">
        <dt>HTML</dt>
        <dd>Uma linguagem de marcação usada para criar páginas web.</dd>

        <dt>CSS</dt>
        <dd>Folhas de estilo usadas para estilizar páginas web.</dd>

        <dt>JavaScript</dt>
        <dd>Uma linguagem de programação usada para adicionar interatividade às páginas web.</dd>
    </dl>

</div>

<?php
include_once '../footer.php';
?>