<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltsummary> HTML</h1>

    <p>A tag <code>&ltsummary></code> é um elemento semântico do HTML usado como resumo ou título de um conteúdo colapsável que está dentro da tag <code>&ltdetails></code>. Ao clicar no <code>&ltsummary></code>, o conteúdo dentro de &ltdetails> é expandido ou recolhido.</p>

    <div class="code">
        <pre>
&ltdetails>
    &ltsummary>Título ou resumo&lt/summary>
    &ltp>Conteúdo escondido que aparece ao expandir.&lt/p>
&lt/details></pre>
    </div>

    <details class="ml-20">
        <summary>Título ou resumo</summary>
        <p>Conteúdo escondido que aparece ao expandir.</p>
    </details>

    <hr>

    <h2>Como funciona?</h2>
<p>O <code>&ltsummary></code> funciona como um botão de alternância:</p>
<ul>
    <li>Ao clicar, o conteúdo expande.</li>
    <li>Ao clicar novamente, o conteúdo recolhe.</li>
</ul>

<p>O navegador aplica um estilo padrão:</p>
<ul>
    <li>Geralmente uma seta ao lado do texto.</li>
    <li>Pode ser estilizado com CSS.</li>
</ul>

<hr>

<h2>Boas práticas</h2>
<ul>
    <li>Sempre coloque o <code>&ltsummary></code> como primeiro filho de <code>&ltdetails></code>.</li>
    <li>Use texto claro e objetivo no <code>&ltsummary></code>.</li>
    <li>Não esconda informações essenciais — deixe para <code>&ltdetails></code> apenas conteúdo opcional.</li>
    <li>Melhore a usabilidade adicionando cursor: pointer ao <code>&ltsummary></code>.</li>
</ul>

<hr>

<p>A tag <code>&ltsummary></code> é uma solução nativa, simples e elegante para criar interfaces interativas sem a necessidade de JavaScript. Ideal para FAQs, documentações e informações complementares.</p>

</div>

<?php
include_once '../footer.php';
?>