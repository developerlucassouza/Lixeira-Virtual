<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltpre> HTML</h1>

    <p>A tag <code>&ltpre></code> (de <em>preformatted text</em>, ou texto pré-formatado) é usada para exibir texto
        exatamente como foi escrito no código-fonte, preservando espaços, quebras de linha e tabulações. É ideal para
        mostrar códigos, tabelas de texto ou qualquer conteúdo que exija formatação fixa.</p>

    <div class="code">
        <pre>
&ltpre>
    Linha 1: Esta é uma linha.
    Linha 2: Os espaços   são preservados.
    Linha 3: As quebras de linha também!
&lt/pre></pre>
    </div>

    <pre class="ml-20">
Linha 1: Esta é uma linha.
Linha 2: Os espaços   são preservados.
Linha 3: As quebras de linha também!
</pre>

    <hr>

    <h2>Características Principais da Tag &ltpre></h2>
    <ul>
        <li><strong>Preservação de Formatação</strong>: Diferente de outras tags de texto, o conteúdo dentro de
            <code>&ltpre></code> mantém o espaçamento, alinhamento e quebras de linha do código original.</li>
        <li><strong>Fonte Monoespaçada</strong>: Por padrão, navegadores exibem o conteúdo de <code>&ltpre></code> em
            uma fonte monoespaçada (como Courier ou Consolas).</li>
        <li><strong>Indicado para Blocos de Texto Estruturados</strong>: É amplamente usado para exibir exemplos de
            código, diagramas de texto e outros conteúdos estruturados.</li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltpre></h2>
    <ul>
        <li>
            <strong>Use Apenas Quando Necessário</strong>:
            A tag <code>&ltpre></code> deve ser utilizada apenas para exibir conteúdo que requer preservação de formatação. Para texto comum, prefira <code>&ltp></code>, <code>&ltdiv></code>, ou outras tags semânticas.
        </li>
        <li>
            <strong>Combine com &ltcode> para Código Fonte</strong>:
            Para exibir código de forma mais semântica, envolva o conteúdo dentro de uma tag <code>&ltcode></code> dentro do <code>&ltpre></code>.
            <div class="code">
                <pre>
&ltpre>&ltcode>
    function saudacao(nome) {
        return `Olá, ${nome}!`;
    }
&lt/code>&lt/pre></pre>
            </div>
        </li>
        <li>
            <strong>Mantenha o Texto Legível</strong>:
            Evite incluir linhas muito longas dentro do <code>&ltpre></code>. Isso pode dificultar a leitura e causar estouro visual.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltpre></code> é uma ferramenta poderosa para exibir texto com formatação fixa e estruturada em páginas HTML. Seu uso é especialmente relevante em contextos técnicos, como exibição de código-fonte ou tabelas de texto. Aplicar boas práticas e estilos adequados é essencial para garantir a legibilidade e a experiência do usuário.</p>

</div>

<?php
include_once '../footer.php';
?>