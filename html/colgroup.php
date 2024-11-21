<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltcolgroup> HTML</h1>

    <p>A tag <code>&ltcolgroup></code> no HTML é utilizada para definir um agrupamento de colunas em uma tabela. Ela
        permite aplicar estilos ou atributos a várias colunas de uma vez, simplificando a formatação e controle da
        aparência das tabelas.</p>

    <div class="code">
        <pre>
&lttable>
    <em>&ltcolgroup></em>
        &ltcol>
        &ltcol>
        &ltcol>
    <em>&lt/colgroup></em>
    &lttr>
        &lttd>Exemplo&lt/td>
        &lttd>Exemplo&lt/td>
        &lttd>Exemplo&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <p>Cada coluna dentro de um grupo de colunas é representada pela tag <code>&ltcol></code>. Esta tag pode receber
        atributos, como span, para indicar quantas colunas o elemento <code>&ltcol></code> irá cobrir, bem como estilos
        específicos para formatar as colunas.</p>

    <hr>

    <h2>Quando e por que usar a tag &ltcolgroup></h2>
    <ul>
        <li><strong>Organização de Tabelas</strong>: A tag <code>&ltcolgroup></code> ajuda a organizar tabelas complexas, especialmente aquelas com
                múltiplas colunas que precisam de estilos específicos.</li>

        <li><strong>Aplicação de Estilos</strong>: Em vez de definir estilos individuais para cada célula ou linha, o <code>&ltcolgroup></code> permite
                aplicar estilos a colunas inteiras a partir da tag <code>&ltcol></code>. Isso facilita a manutenção do código, principalmente quando você
                deseja alterar rapidamente o estilo de uma coluna completa.</li>

        <li><strong>Melhorar a Acessibilidade</strong>: Definir claramente as colunas e suas funções pode melhorar a acessibilidade para
            ferramentas de leitura de tela.</li>
    </ul>
</div>

<?php
include_once '../footer.php';
?>