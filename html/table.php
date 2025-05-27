<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lttable> HTML</h1>

    <p>A tag <code>&lttable></code> é um elemento do HTML utilizado para criar tabelas e organizar dados em linhas e
        colunas.</p>

    <div class="code">
        <pre>
&lttable>
    &lttr>
        &lttd>Linha 1, Coluna 1&lt/td>
        &lttd>Linha 1, Coluna 2&lt/td>
    &lt/tr>
    &lttr>
        &lttd>Linha 2, Coluna 1&lt/td>
        &lttd>Linha 2, Coluna 2&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <table>
    <tr>
        <td>Linha 1, Coluna 1</td>
        <td>Linha 1, Coluna 2</td>
    </tr>
    <tr>
        <td>Linha 2, Coluna 1</td>
        <td>Linha 2, Coluna 2</td>
    </tr>
</table>

<ul>
    <li><code>&lttable></code> é a estrutura principal.</li>
    <li><code>&lttr></code> (table row) define uma linha.</li>
    <li><code>&lttd></code> (table data) define uma célula de dados.</li>
</ul>

    <p>Cada linha estará dentro de uma tag <code>&lttr></code>, e cada dado dentro de uma tag &lttd></p>

    <div class="code">
        <pre>
&lttable>   <span class="comentario">&lt!-- Tabela --></span>
    &lttr>  <span class="comentario">&lt!-- Linha 1 --></span>
        &ltth>Produto&lt/th>    
        &ltth>Preço&lt/th>      <span class="comentario">&lt!-- No Cabeçalho, usa-se &ltth> ao invés de &lttd> --></span>
        &ltth>Quantidade&lt/th>
    &lt/tr>

    &lttr>  <span class="comentario">&lt!-- Linha 2 --></span>
        &lttd>Maçã&lt/td>
        &lttd>R$20&lt/td>
        &lttd>863&lt/td>
    &lt/tr>

    &lttr>  <span class="comentario">&lt!-- Linha 3 --></span>
        &lttd>Batata&lt/td>
        &lttd>R$40&lt/td>
        &lttd>917&lt/td>
    &lt/tr>
   
    &lttr>  <span class="comentario">&lt!-- Linha 4 --></span>
        &lttd>Cenoura&lt/td>
        &lttd>R$35&lt/td>
        &lttd>186&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <!-- Tabela -->
    <table>
        <!-- Linha 1 -->
        <!-- No Cabeçalho, usa-se &ltth> ao invés de &ltdt> -->
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        <!-- Linha 2 -->
        <tr>
            <td>Maçã</td>
            <td>R$20</td>
            <td>863</td>
        </tr>

        <!-- Linha 3 -->
        <tr>
            <td>Batata</td>
            <td>R$40</td>
            <td>917</td>
        </tr>

        <!-- Linha 4 -->
        <tr>
            <td>Cenoura</td>
            <td>R$35</td>
            <td>186</td>
        </tr>

    </table>

    <hr>

    <h2>Quando usar a tag &lttable>?</h2>
    <ul>
        <li>Para apresentar dados organizados (ex.: relatórios, listas de preços, cronogramas).</li>

        <li>Para exibir informações que possuem relação em linhas e colunas.</li>

        <li>Para criar interfaces administrativas ou dashboards.</li>

        <li>Não deve ser usada para criar layouts. O uso de tabelas para layout foi comum no passado, mas atualmente se
            utiliza CSS para isso.</li>
    </ul>

    <hr>

    <h2>Elementos complementares de uma &lttable></h2>

    <table>
        <tr>
            <th>Tag</th>
            <th>Função</th>
        </tr>

        <tr>
            <td>&ltthead></td>
            <td>Agrupa o cabeçalho da tabela.</td>
        </tr>

        <tr>
            <td>&lttbody></td>
            <td>Agrupa o corpo da tabela.</td>
        </tr>

        <tr>
            <td>&lttfoot></td>
            <td>Agrupa o rodapé da tabela.</td>
        </tr>

        <tr>
            <td>&lttr></td>
            <td>Representa uma linha.</td>
        </tr>

        <tr>
            <td>&lttd></td>
            <td>Representa uma célula de dados.</td>
        </tr>

        <tr>
            <td>&ltth></td>
            <td>Representa uma célula de cabeçalho (normalmente em negrito e centralizada).</td>
        </tr>

        <tr>
            <td>&ltcaption></td>
            <td>Descreve o título da tabela.</td>
        </tr>

        <tr>
            <td>&ltcolgroup></td>
            <td>Agrupa definições de estilo para colunas.</td>
        </tr>

        <tr>
            <td>&ltcol></td>
            <td>Define o estilo de uma coluna individual.</td>
        </tr>
    </table>

    <hr>

    <h2>Boas práticas</h2>
<ul>
    <li>Use CSS para estilização.</li>
    <li>Sempre utilize <thead>, <tbody> e <tfoot> para organizar bem os dados.</li>
    <li>Evite usar tabelas para fins puramente visuais.</li>
    <li>Sempre pense em acessibilidade.</li>
</ul>

<hr>

<p>A tag <code>&lttable></code> é essencial para estruturar dados de forma clara e organizada. Quando usada corretamente, melhora significativamente a usabilidade e a leitura das informações.</p>

</div>

<?php
include_once '../footer.php';
?>