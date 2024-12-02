<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltol> HTML</h1>
    <p>A tag <code>&ltol></code> é usada para criar listas ordenadas no HTML. Os itens da lista são apresentados em uma
        sequência numerada ou hierárquica. Cada item é definido com a tag <code>&ltli></code> (list item, ou item da
        lista).</p>

    <div class="code">
        <pre>
&ltol>
    &ltli>Primeiro item&lt/li>
    &ltli>Segundo item&lt/li>
    &ltli>Terceiro item&lt/li>
&lt/ol></pre>
    </div>

    <ol>
        <li>Primeiro item</li>
        <li>Segundo item</li>
        <li>Terceiro item</li>
    </ol>

    <hr>

    <h2>Características Principais da Tag &ltol></h2>
    <ul>
        <li><strong>Semântica de Ordem</strong>: Utilizada quando a ordem dos itens é importante, como etapas de um
            processo ou listas ranqueadas.</li>
        <li><strong>Numerada por Padrão</strong>: Cada item recebe um número automaticamente.</li>
        <li><strong>Personalizável</strong>: A ordem ou estilo dos números pode ser alterado com atributos e CSS.</li>
    </ul>

    <hr>

    <h2>Atributos da Tag &ltol></h2>
    <ul>
        <li>
            <code>type</code>: Define o estilo do marcador de ordem (números, letras, algarismos romanos).
            <div class="code">
                <pre>&ltol <em>type="A"</em>></pre>
            </div>
            <ul>
                <li><code> 1 </code> - Números</li>
                <li><code> a </code> - Letras Minúsculas</li>
                <li><code> A </code> - Letras Maiúsculas</li>
                <li><code> i </code> - Algarismos Romanos Minúsculos</li>
                <li><code> I </code> - Algarismos Romanos Maiúsculos</li>
            </ul>
        </li>

        <li>
            <code>start</code>: Define o número inicial da lista.
            <div class="code">
                <pre>
&ltol <em>start="5"</em>>
    &ltli>Item 1&lt/li>
    &ltli>Item 2&lt/li>
&lt/ol></pre>
            </div>
            <ol start="5" class="ml-20">
                <li>Item 1</li>
                <li>Item 2</li>
            </ol>
        </li>

        <li>
            <code>reversed</code>: Exibe a lista em ordem reversa (decrescente).
            <div class="code">
                <pre>
&ltol <em>reversed</em>>
    &ltli>Item 3&lt/li>
    &ltli>Item 2&lt/li>
    &ltli>Item 1&lt/li>
&lt/ol></pre>
            </div>
            <ol reversed class="ml-20">
                <li>Item 3</li>
                <li>Item 2</li>
                <li>Item 1</li>
            </ol>

        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltol></h2>
    <ul>
        <li>
            <strong>Use &ltol> Apenas para Ordem Importante</strong>:
            Se a ordem dos itens não for relevante, utilize <code>&ltul></code> (lista não ordenada).
        </li>
        <li>
            <strong>Combine com Semântica</strong>:
            Use títulos ou legendas (como <code>&lth2></code> ou <code>&ltlegend></code>) para descrever o propósito da
            lista.
        </li>
        <li>
            <strong>Evite Listas Longas</strong>:
            Quebre listas muito extensas em partes menores para melhorar a legibilidade.
        </li>
        <li>
            <strong>Estilize para Acessibilidade</strong>:
            Certifique-se de que as listas são legíveis tanto para navegadores modernos quanto para tecnologias
            assistivas.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltol></code> é uma ferramenta poderosa para criar listas ordenadas que transmitem ordem ou
        hierarquia de forma clara e semântica. Usá-la corretamente melhora a legibilidade, acessibilidade e organização
        do conteúdo em sites modernos.</p>
</div>

<?php
include_once '../footer.php';
?>