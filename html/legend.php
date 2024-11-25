<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltlegend> HTML</h1>

    <p>A tag <code>&ltlegend></code> é usada para adicionar uma legenda descritiva ao elemento <code>&ltfieldset></code>. Ela define um título para um conjunto de campos relacionados em um formulário, tornando a interface mais organizada e acessível.</p>

    <div class="code">
        <pre>
&ltform>
    &ltfieldset>
        <em>&ltlegend>Informações Pessoais&lt/legend></em>
        &ltlabel for="nome">Nome:&lt/label>
        &ltinput type="text" id="nome" name="nome">
        &ltlabel for="email">Email:&lt/label>
        &ltinput type="email" id="email" name="email">
    &lt/fieldset>
&lt/form></pre>
    </div>

    <hr>

    <h2>Por que usar &ltlegend>?</h2>
<ul>
    <li>
        <strong>Organização</strong>:
        Ajuda a agrupar campos relacionados sob um título claro.
    </li>
    <li>
        <strong>Acessibilidade</strong>:
        Leitores de tela utilizam <code>&ltlegend></code> para descrever os campos dentro de um <code>&ltfieldset></code>.
    </li>
    <li>
        <strong>Clareza para o usuário</strong>:
        Garante que o usuário entenda o propósito de cada conjunto de campos.
    </li>
</ul>

<hr>

<h2>Boas Práticas no Uso de &ltlegend></h2>
<ul>
    <li>
        <strong>Use uma descrição clara e concisa</strong>:
        A legenda deve resumir o propósito do grupo de campos.
    </li>
    <li>
        <strong>Evite usar <code>&ltlegend></code> fora de <code>&ltfieldset></code></strong>:
        Seu uso fora de um <code>&ltfieldset></code> não tem funcionalidade semântica.
    </li>
    <li>
        <strong>Combine <code>&ltlegend></code> com CSS</strong>:
        Estilize a legenda para que fique visualmente destacada, mas de maneira harmônica com o restante do formulário.
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>