<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdl> HTML</h1>
    <p>A tag <code>&ltdl></code> significa "<em>Description List</em>" (Lista de Descrição) e é usada para definir uma
        lista de termos e suas descrições. É composta por pares de itens, onde um termo é descrito por um ou mais
        detalhes. Essa estrutura é muito útil para criar glossários, listas de definições, perguntas e respostas, e
        outras informações onde termos e descrições são necessários.</p>

    <hr>

    <h2>Estrutura básica da tag &ltdl></h2>
    <p>Uma lista de descrição (<code>&ltdl></code>) é composta por:</p>
    <ul>
        <li>
            <code>&ltdt></code> (<em>Description Term</em>): Define o termo a ser descrito.
        </li>
        <li>
            <code>&ltdd></code> (<em>Description Definition</em>): Define a descrição ou explicação do termo.
        </li>
    </ul>

    <div class="code">
        <pre>
&ltdl>
    &ltdt>Termo 1&lt/dt>
    &ltdd>Definição ou descrição do Termo 1.&lt/dd>
    
    &ltdt>Termo 2&lt/dt>
    &ltdd>Definição ou descrição do Termo 2.&lt/dd>
&lt/dl></pre>
    </div>

    <dl class="ml-20">
        <dt>Termo 1</dt>
        <dd>Definição ou descrição do Termo 1.</dd>

        <dt>Termo 2</dt>
        <dd>Definição ou descrição do Termo 2.</dd>
    </dl>

    <p>Exemplo:</p>

    <div class="code">
        <pre>
&ltdl>
    &ltdt>HTML&lt/dt>
    &ltdd>Linguagem de marcação usada para criar páginas web.&lt/dd>

    &ltdt>CSS&lt/dt>
    &ltdd>Folhas de estilo usadas para definir o layout e o design das páginas web.&lt/dd>

    &ltdt>JavaScript&lt/dt>
    &ltdd>Linguagem de programação usada para adicionar interatividade às páginas web.&lt/dd>
&lt/dl></pre>
    </div>

    <dl class="ml-20">
        <dt>HTML</dt>
        <dd>Linguagem de marcação usada para criar páginas web.</dd>

        <dt>CSS</dt>
        <dd>Folhas de estilo usadas para definir o layout e o design das páginas web.</dd>

        <dt>JavaScript</dt>
        <dd>Linguagem de programação usada para adicionar interatividade às páginas web.</dd>
    </dl>

    <hr>

    <h2>Usos comuns da tag &ltdl></h2>
    <ul>
        <li><strong>Glossários</strong>: Listas de termos e suas definições.</li>
        <li><strong>FAQs</strong>: Perguntas frequentes, onde o termo é a pergunta e a descrição é a resposta.</li>
        <li><strong>Listas de características de produtos</strong>: O termo é a característica e a descrição explica
            mais detalhes.</li>
    </ul>

</div>

<?php
include_once '../footer.php';
?>