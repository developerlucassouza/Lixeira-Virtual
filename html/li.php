<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltli> HTML</h1>
    <p>A tag <code>&ltli></code> (List Item) é usada para definir um item dentro de uma lista em HTML. Ela é um elemento de contêiner que só pode ser usada dentro das tags de lista: <code>&ltul></code> (lista não ordenada), <code>&ltol></code> (lista ordenada) e &<code>ltmenu></code>.</p>

    <p>Exemplo com &ltul>:</p>
    <div class="code">
        <pre>
&ltul>
    &ltli>Primeiro item&lt/li>
    &ltli>Segundo item&lt/li>
    &ltli>Terceiro item&lt/li>
&lt/ul></pre>
    </div>
    <ul>
        <li>Primeiro item</li>
        <li>Segundo item</li>
        <li>Terceiro item</li>
    </ul>

    <p>Exemplo com &ltol>:</p>
    <div class="code">
        <pre>
&ltol>
    &ltli>Primeiro item&lt/li>
    &ltli>Segundo item&lt/li>
    &ltli>Terceiro item&lt/li>
&lt/ol></pre>
    </div>
    <ol>
        <li>Primeiro item</li>
        <li>Segundo item</li>
        <li>Terceiro item</li>
    </ol>

    <hr>

    <h2>Atributos da Tag &ltli></h2>
<p>A tag <code>&ltli></code> possui apenas um atributo específico:</p>

<ul>
    <li>
        <code>value</code> (Somente para <code>&ltol></code>): Define o número inicial de um item específico em uma lista ordenada.
        <div class="code">
            <pre>
&ltol>
    &ltli>Item 1&lt/li>
    &ltli value="10">Item 10&lt/li>
    &ltli>Item 11&lt/li>
&lt/ol></pre>
        </div>
        <ol>
            <li>Item 1</li>
            <li value="10">Item 10</li>
            <li>Item 11</li>
        </ol>
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>