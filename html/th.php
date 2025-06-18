<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltth> HTML</h1>

    <p>A tag <code>&ltth></code> (table header) é usada para definir células de cabeçalho dentro de uma tabela HTML.</p>
    <p>Ela geralmente aparece na primeira linha (ou coluna) de uma tabela e representa títulos ou categorias dos dados
        apresentados nas células <td>.</p>
    <p>Visualmente, o conteúdo de um <code>&ltth></code> é centralizado e exibido em negrito por padrão.</p>

    <div class="code">
        <pre>
&lttable>
    &lttr>
        &ltth>Nome&lt/th>
        &ltth>Idade&lt/th>
        &ltth>Cidade&lt/th>
    &lt/tr>
    &lttr>
        &lttd>Cléber&lt/td>
        &lttd>25&lt/td>
        &lttd>São Paulo&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cidade</th>
        </tr>
        <tr>
            <td>Cléber</td>
            <td>25</td>
            <td>São Paulo</td>
        </tr>
    </table>

    <hr>

    <h2>Principais atributos da &ltth></h2>
<ul>
    <li><code>colspan</code>: Faz o cabeçalho ocupar várias colunas.</li>
    
    <li><code>rowspan</code>: Faz o cabeçalho ocupar várias linhas.</li>
    
    <li><code>headers</code>: Associa o <code>&ltth></code> a uma célula <code>&lttd></code> por ID, útil para acessibilidade.</li>
    
    <li>
        <code>scope</code>: Indica a direção do cabeçalho:
        
        <ul>
            <li><code>col</code>: Cabeçalho de coluna (padrão)</li>
            
            <li><code>row</code>: Cabeçalho de linha</li>
            
            <li><code>colgroup</code>: Para grupo de colunas</li>
            
            <li><code>rowgroup</code>: Para grupo de linhas</li>
        </ul>
    </li>
    
    <li><code>abbr</code>: Fornece uma forma abreviada do conteúdo para leitores de tela.</li>
</ul>

<hr>

<h2>Boas práticas</h2>
<ul>
    <li>Use <code>&ltth></code> apenas para células de cabeçalho; para dados comuns, use <code>&lttd></code>.</li>
    
    <li>Sempre defina o atributo scope para melhorar a acessibilidade, especialmente para leitores de tela.</li>
    
    <li>Utilize CSS para estilizar <code>&ltth></code> se desejar mudar o alinhamento ou fonte.</li>
    
    <li>Evite usar <code>&ltth></code> fora de <code>&lttable></code>, <code>&ltthead></code>, <code>&lttbody></code> ou <code>&lttfoot></code>.</li>
</ul>

<hr>

<p>A tag <code>&ltth></code> é fundamental para criar tabelas bem estruturadas e acessíveis, pois define claramente os cabeçalhos das colunas ou linhas.
Quando usada corretamente com <code>scope</code>, ela melhora a semântica, a leitura da tabela e a experiência de acessibilidade.</p>

</div>

<?php
include_once '../footer.php';
?>