<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdetails> HTML</h1>

    <p>A tag <code>&ltdetails></code> no HTML é usada para criar um elemento interativo que o usuário pode expandir ou
        recolher. Ela é especialmente útil quando você deseja apresentar conteúdo adicional que fica oculto até que o
        usuário decida revelá-lo.</p>
    <p>Quando combinada com a tag <code>&ltsummary></code>, o <code>&ltdetails></code> permite que o texto introdutório
        seja mostrado, e ao clicar nesse resumo, o conteúdo completo é exibido.</p>

    <div class="code">
        <pre>
&ltdetails>
    &ltsummary>Mais informações&lt/summary>
    Este é o conteúdo que será exibido quando o usuário clicar em "Mais informações".
&lt/details></pre>
    </div>

    <details class="ml-20">
        <summary>Mais informações</summary>
        Este é o conteúdo que será exibido quando o usuário clicar em "Mais informações".
    </details>

    <ul>
        <li>
            <code>&ltsummary></code>: Define o título clicável, que revela ou oculta o conteúdo.
        </li>
        <li>
            <code>&ltdetails></code>: Contém o conteúdo expansível, que ficará oculto até que o usuário interaja com o
            resumo.
        </li>
    </ul>

    <hr>

    <h2>Atributos da tag &ltdetails></h2>

    <ul>
        <li><strong>open</strong>: O atributo open é um booleano que, quando presente, faz com que o conteúdo dentro da
            tag <code>&ltdetails></code> apareça expandido por padrão. Se não estiver presente, o conteúdo estará oculto
            até que o usuário clique no resumo.</li>
    </ul>

    <div class="code">
        <pre>
&ltdetails <em>open</em>>
    &ltsummary>O que é CSS?&lt/summary>
    CSS significa Cascading Style Sheets, e é usado para definir o estilo visual das páginas web.
&lt/details></pre>
    </div>

    <details open class="ml-20">
        <summary>O que é CSS?</summary>
        CSS significa Cascading Style Sheets, e é usado para definir o estilo visual das páginas web.
    </details>

    <hr>

    <h2>Quando usar a tag &ltdetails>?</h2>

    <p>A tag <code>&ltdetails></code> é ideal quando você deseja fornecer informações adicionais que não precisam ser
        exibidas logo de cara. Pode ser usada para:</p>

    <ul>
        <li>FAQs (Perguntas Frequentes).</li>
        <li>Respostas ocultas para quizzes.</li>
        <li>Informações detalhadas sobre produtos ou serviços.</li>
        <li>Passagens longas de texto que podem ser colapsadas para uma experiência mais limpa.</li>
    </ul>

</div>

<?php
include_once '../footer.php';
?>