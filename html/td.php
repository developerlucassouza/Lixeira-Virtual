<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lttd> HTML</h1>

    <p>A tag <code>&lttd></code> significa "<em>table data</em>" (dados da tabela) e é utilizada para definir uma célula
        de dados dentro de uma linha (<code>&lttr></code>) em uma tabela HTML.</p>
    <p><code>&lttd></code> é usada para cada célula de uma linha.</p>

    <div class="code">
        <pre>
&lttable>
    &lttr>
        &lttd>Celula 1&lt/td>
        &lttd>Celula 2&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <table>
        <tr>
            <td class="bg-light">Celula 1</td>
            <td class="bg-light">Celula 2</td>
        </tr>
    </table>

    <div class="code">
        <pre>
&lttable>
    &lttr>
        &lttd>João&lt/td>
        &lttd>25 anos&lt/td>
    &lt/tr>
    &lttr>
        &lttd>Maria&lt/td>
        &lttd>30 anos&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <table>
        <tr>
            <td>João</td>
            <td>25 anos</td>
        </tr>
        <tr>
            <td>Maria</td>
            <td>30 anos</td>
        </tr>
    </table>

    <hr>

    <h2>Atributos da tag &lttd></h2>

    <ul>
        <li><code>colspan</code>: Define o número de colunas que a célula deve ocupar.</li>
        <li><code>rowspan</code>: Define o número de linhas que a célula deve ocupar.</li>
        <li><code>headers</code>: Indica quais cabeçalhos (<code>&ltth></code>) estão associados à célula (para
            acessibilidade).</li>
    </ul>

    <h3>Exemplo com colspan e rowspan</h3>

    <div class="code">
        <pre>
&lttable>
    &lttr>
        &lttd <em>colspan="2"</em>>Célula que ocupa 2 colunas&lt/td>
    &lt/tr>
    &lttr>
        &lttd <em>rowspan="2"</em>>Célula que ocupa 2 linhas&lt/td>
        &lttd>Linha 1&lt/td>
    &lt/tr>
    &lttr>
        &lttd>Linha 2&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <table>
        <tr>
            <td colspan="2">Célula que ocupa 2 colunas</td>
        </tr>
        <tr>
            <td rowspan="2">Célula que ocupa 2 linhas</td>
            <td>Linha 1</td>
        </tr>
        <tr>
            <td>Linha 2</td>
        </tr>
    </table>

    <p><code>colspan="2"</code> expande horizontalmente.</p>
    <p><code>rowspan="2"</code> expande verticalmente.</p>

    <hr>

    <h2>Boas práticas</h2>
    <ul>
        <li>Sempre use <code>&lttd></code> dentro de <code>&lttr></code>.</li>
        <li>Prefira estilizar usando CSS.</li>
        <li>Use <code>colspan</code> e <code>rowspan</code> com cuidado, pois podem afetar a acessibilidade e
            responsividade.</li>
        <code>Para tabelas com muitos dados, lembre-se de implementar boas práticas de acessibilidade como <code>headers</code>
        e <code>scope</code>.</code>
    </ul>

    <hr>

    <p>A tag <code>&lttd></code> é essencial para a construção de tabelas no HTML, funcionando como a unidade básica de inserção de dados.</p>

</div>

<?php
include_once '../footer.php';
?>