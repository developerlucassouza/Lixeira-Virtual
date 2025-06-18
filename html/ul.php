<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltul> HTML</h1>

<p>
    A tag <code>&ltul></code> (unordered list) é usada para criar listas não ordenadas em HTML.
    Os itens dentro dessa lista são representados pela tag <code>&ltli></code>, e por padrão são exibidos com marcadores (bolinhas).
</p>

<p>Use <code>&ltul></code> sempre que você quiser listar itens sem uma ordem específica.</p>

<div class="code">
    <pre>
&ltul>
    &ltli>Arroz&lt/li>
    &ltli>Feijão&lt/li>
    &ltli>Carne&lt/li>
&lt/ul></pre>
</div>

<ul>
  <li>Arroz</li>
  <li>Feijão</li>
  <li>Carne</li>
</ul>

<hr>

<h2>Listas Aninhadas</h2>

<p>Também podemos colocar listas dentro de listas, colocando o <code>&ltu></code> dentro do <code>&ltli></code>:</p>

<div class="code">
    <pre>
&ltul>
    &ltli>
        Front-End
        &ltul>
            &ltli>HTML&lt/li>
            &ltli>CSS&lt/li>
            &ltli>JavaScript&lt/li>
        &lt/ul>
    &lt/li>

    &ltli>
        Back-End
        &ltul>
            &ltli>PHP&lt/li>
            &ltli>MySQL&lt/li>
            &ltli>Laravel&lt/li>
        &lt/ul>
    &lt/li>

    &ltli>Inteligência Artifical&lt/li>
    &ltli>Games com Unity&lt/li>
&lt/ul>
    </pre>
</div>

<ul>
    <li>
        Front-End
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
        </ul>
    </li>

    <li>
        Back-End
        <ul>
            <li>PHP</li>
            <li>MySQL</li>
            <li>Laravel</li>
        </ul>
    </li>

    <li>Inteligência Artifical</li>
    <li>Games com Unity</li>
</ul>

<hr>

<h2>Boas práticas</h2>
<ul>
    <li>Use <code>&ltul></code> para itens sem ordem numérica ou sequência lógica.</li>
    
    <li>Use CSS (<code>list-style-type</code>, <code>margin</code>, <code>padding</code>) para controlar a aparência.</li>
    
    <li>Agrupe listas aninhadas com clareza, para manter a legibilidade do HTML.</li>
</ul>

<hr>

<p>A tag <code>&ltul></code> é ideal para representar listas genéricas, menus, tópicos, ou qualquer conjunto de itens sem ordem definida.</p>

<p>Ela é simples, semântica e muito flexível com CSS.</p>

<p>Saber quando usar <code>&ltul></code> em vez de <code>&ltol></code> ou <code>&ltdl></code> é essencial para construir HTML organizado, acessível e semântico.</p>


</div>

<?php
include_once '../footer.php';
?>