<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lttr> HTML</h1>

    <p>A tag <code>&lttr></code> significa table row (linha da tabela) e é usada para criar uma linha de células dentro
        de uma tabela HTML.</p>
    <p>Cada <code>&lttr></code> pode conter uma ou mais células, que são representadas pelas tags <code>&lttd></code>
        (dados) ou <code>&ltth></code> (cabeçalhos).</p>

        <div class="code">
            <pre>
&lttable>
    &lttr>
        &lttd>Produto&lt/td>
        &lttd>Preço&lt/td>
        &lttd>Qualidade&lt/td>
    &lt/tr>

    &lttr>
        &lttd>Produto 2&lt/td>
        &lttd>Preço 2&lt/td>
        &lttd>Qualidade 2&lt/td>
    &lt/tr>
&lt/table>    </pre>
        </div>

    <table>
        <tr>
            <td>Produto</td>
            <td>Preço</td>
            <td>Qualidade</td>
        </tr>

        <tr>
            <td>Produto 2</td>
            <td>Preço 2</td>
            <td>Qualidade 2</td>
        </tr>
    </table>

    <hr>

    <h2>Boas práticas</h2>
<ul>
    <li>Use <code>&lttr></code> dentro de <code>&lttable></code>, <code>&ltthead></code>, <code>&lttbody></code> ou <code>&lttfoot></code>.</li>
    
    <li>Mantenha a mesma quantidade de células (<code>&lttd></code> ou <code>&ltth></code>) em cada linha, para manter a tabela alinhada.</li>
    
    <li>Para tabelas grandes, use <code>&ltthead></code> e <code>&lttbody></code> para organizar melhor.</li>
</ul>

<hr>

<p>A tag <code>&lttr></code> é a base da estrutura de qualquer tabela HTML, pois representa cada linha de dados.</p>

<p>Ela deve conter <code>&lttd></code> ou <code>&ltth></code>, e pode ser estilizada com classes e CSS para melhorar a leitura e aparência da tabela.</p>

<p>Tabelas bem estruturadas com <code>&lttr></code> melhoram a organização visual, a acessibilidade e a manutenção do código.</p>

</div>

<?php
include_once '../footer.php';
?>