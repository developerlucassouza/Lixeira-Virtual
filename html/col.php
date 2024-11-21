<?php
include_once '../header.php';
?>

<style>
    td {
        border: 1px solid black;
    }
</style>

<div class="lesson">
    <h1>Tag &ltcol> HTML</h1>

    <p>A tag <code>&ltcol></code> no HTML é usada para definir características de estilo para uma ou mais colunas dentro
        de uma tabela. Ela é colocada dentro do elemento <code>&ltcolgroup></code>, que agrupa uma ou mais colunas da
        tabela, permitindo aplicar estilos e atributos a essas colunas de forma centralizada.</p>

    <div class="code">
        <pre>
&lttable>
    &ltcolgroup>
        <em>&ltcol style="background-color: lightblue;"></em>
        <em>&ltcol style="background-color: lightgreen;"></em>
    &lt/colgroup>
    &lttr>
        &lttd>Coluna 1, Linha 1&lt/td>
        &lttd>Coluna 2, Linha 1&lt/td>
    &lt/tr>
    &lttr>
        &lttd>Coluna 1, Linha 2&lt/td>
        &lttd>Coluna 2, Linha 2&lt/td>
    &lt/tr>
&lt/table></pre>
    </div>

    <br>

    <table>
        <colgroup>
            <col style="background-color: lightblue;">
            <col style="background-color: lightgreen;">
        </colgroup>
        <tr>
            <td>Coluna 1, Linha 1</td>
            <td>Coluna 2, Linha 1</td>
        </tr>
        <tr>
            <td>Coluna 1, Linha 2</td>
            <td>Coluna 2, Linha 2</td>
        </tr>
    </table>

    <hr>

    <p>A tag <code>&ltcol></code> é especialmente útil para estilizar e manipular colunas em tabelas HTML de forma organizada e eficiente, sendo recomendada para projetos que envolvem muitas colunas e quando há necessidade de personalizar cada uma delas de forma distinta.</p>

</div>

<?php
include_once '../footer.php';
?>