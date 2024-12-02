<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltoptgroup> HTML</h1>
    <p>A tag <code>&ltoptgroup></code> é usada para agrupar visual e semanticamente elementos <code>&ltoption></code>
        dentro de um menu suspenso criado com <code>&ltselect></code>. Ela é útil para melhorar a organização e a
        acessibilidade, especialmente em listas longas.</p>

    <div class="code">
        <pre>
&ltselect>
    &ltoptgroup label="Frutas">
        &ltoption>Banana&lt/option>
        &ltoption>Maçã&lt/option>
    &lt/optgroup>
    &ltoptgroup label="Vegetais">
        &ltoption>Cenoura&lt/option>
        &ltoption>Brócolis&lt/option>
    &lt/optgroup>
&lt/select></pre>
    </div>

    <div style="padding: 0px 20px">
        <select class="form-control">
            <optgroup label="Frutas">
                <option>Banana</option>
                <option>Maçã</option>
            </optgroup>
            <optgroup label="Vegetais">
                <option>Cenoura</option>
                <option>Brócolis</option>
            </optgroup>
        </select>
    </div>

    <hr>

    <h2>Características Principais da Tag &ltoptgroup></h2>
    <ul>
        <li><strong>Agrupamento de Opções</strong>: Organiza <code>&ltoption></code> em categorias claras.</li>
        <li><strong>Semântica</strong>: Indica ao navegador que as opções dentro de um <code>&ltoptgroup></code>
            pertencem a uma mesma categoria.</li>
        <li><strong>Não Selecionável</strong>: O texto do <code>&ltoptgroup></code> serve apenas como rótulo e não pode
            ser selecionado.</li>
    </ul>

    <hr>

    <h2>Atributos da Tag &ltoptgroup></h2>
    <ul>
        <li>
            <code>label</code>: Define o rótulo que descreve o grupo de opções.
            <div class="code">
                <pre>
&ltoptgroup <em>label="Bebidas"</em>>
    &ltoption>Água&lt/option>
    &ltoption>Suco&lt/option>
&lt/optgroup></pre>
            </div>
        </li>

        <li>
            <code>disabled</code>: Desativa todas as opções do grupo, tornando-as não selecionáveis.
            <div class="code">
                <pre>
&ltoptgroup label="Indisponíveis" <em>disabled</em>>
    &ltoption>Vinho&lt/option>
    &ltoption>Cerveja&lt/option>
&lt/optgroup></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltoptgroup></h2>
    <ul>
        <li>
            <strong>Use para Organização Semântica</strong>:
            Agrupe opções que pertencem à mesma categoria para facilitar a navegação.
        </li>
        <li>
            <strong>Mantenha o label Descritivo</strong>:
            Certifique-se de que o texto do label seja claro e informativo.
        </li>
        <li>
            <strong>Evite Agrupamentos Excessivos</strong>:
            Se há poucos itens, o uso de <code>&ltoptgroup</code>> pode ser desnecessário.
        </li>
        <li>
            <strong>Combine com Acessibilidade</strong>:
            Garanta que as categorias sejam compreensíveis para leitores de tela.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltoptgroup></code> é uma ferramenta valiosa para organizar opções em menus suspensos de forma clara
        e acessível. Usá-la corretamente melhora a experiência do usuário, especialmente em formulários complexos.</p>

</div>

<?php
include_once '../footer.php';
?>