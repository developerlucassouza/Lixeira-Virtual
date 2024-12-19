<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltp> HTML</h1>

    <p>A tag <code>&ltp</code>> é usada para representar um parágrafo de texto em HTML. É uma das tags mais simples e
        fundamentais, sendo amplamente utilizada para criar conteúdo textual organizado e legível em páginas web.</p>

    <div class="code">
        <pre>&ltp>Este é um parágrafo simples de texto.&lt/p></pre>
    </div>

    <hr>

    <h2>Características Principais da Tag &ltp></h2>
    <ul>
        <li><strong>Estruturação de Texto</strong>: Agrupa blocos de texto em parágrafos, facilitando a leitura e
            separação visual do conteúdo.</li>
        <li><strong>Quebra Automática de Linha</strong>: Por padrão, cada <code>&ltp></code> começa em uma nova linha e
            tem um espaçamento vertical ao redor (margem).</li>
        <li><strong>Conteúdo Textual ou Inline</strong>: Pode conter texto, links, imagens e outros elementos inline.
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltp></h2>
    <ul>
        <li>
            <strong>Evite Usar &ltp> Apenas por Estilo</strong>:
            Utilize <code>&ltp></code> apenas para conteúdo que realmente represente um parágrafo. Evite usá-lo como substituto genérico para criar espaçamento ou aplicar estilos.
        </li>
        <li>
            <strong>Não Aninhe Tags &ltp></strong>:
            Não é permitido colocar uma tag <code>&ltp></code> dentro de outra <code>&ltp></code>. Para separar blocos, use tags adicionais como <code>&ltdiv></code> ou <code>&ltsection></code>.
            <p>Errado:</p>
            <div class="code">
                <pre>&ltp>Este é um &ltp>parágrafo aninhado&lt/p>.&lt/p></pre>
            </div>
            <p>Certo:</p>
            <div class="code">
                <pre>
&ltp>Este é um parágrafo.&lt/p>
&ltp>Outro parágrafo separado.&lt/p></pre>
            </div>
        </li>
        <li>
            <strong>Combine com Outros Elementos Semânticos</strong>: 
            Use <code>&ltp></code> em conjunto com <code>&ltheader></code>, <code>&ltarticle></code>, <code>&ltsection></code> e outras tags para estruturar melhor o conteúdo.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltp></code> é fundamental para criar conteúdo textual claro e estruturado em páginas HTML. Seu uso correto, aliado a boas práticas de estilização e acessibilidade, ajuda a melhorar a organização e a experiência do usuário.</p>

</div>

<?php
include_once '../footer.php';
?>