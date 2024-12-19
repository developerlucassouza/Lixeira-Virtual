<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltoption> HTML</h1>
    <p>A tag <code>&ltoption></code> é utilizada para definir opções dentro de uma lista suspensa criada com a tag
        <code>&ltselect></code>. Cada item de <code>&ltoption></code> representa uma escolha que o usuário pode
        selecionar. Essas opções podem ser simples texto ou valores mais complexos, dependendo do contexto.</p>

    <div class="code">
        <pre>
&ltselect>
    &ltoption>Banana&lt/option>
    &ltoption>Maçã&lt/option>
    &ltoption>Uva&lt/option>
&lt/select></pre>
    </div>

    <hr>

    <h2>Características Principais da Tag &ltoption></h2>
    <ul>
        <li><strong>Opções de Seleção</strong>: Cada <code>&ltoption></code> representa uma opção individual dentro de
            um menu suspenso.</li>
        <li><strong>Interatividade</strong>: Permite que o usuário selecione uma ou mais opções (dependendo do tipo de
            controle, como em múltiplas seleções).</li>
        <li><strong>Valores e Texto</strong>: O valor atribuído ao <code>&ltoption></code> é o dado enviado ao servidor
            quando o formulário é enviado, enquanto o texto dentro da tag é o que é exibido ao usuário.</li>

    </ul>

    <hr>
    <h2>Atributos da Tag &ltoption></h2>

    <ul>
        <li>
            <strong>value</strong>:
            Define o valor que será enviado ao servidor quando o formulário for submetido. Caso o atributo <code>value</code> seja omitido, o valor enviado será o conteúdo da tag <code>&ltoption></code>.
            <div class="code">
                <pre>&ltoption value="banana">Banana&lt/option></pre>
            </div>
        </li>
        <li>
            <strong>selected</strong>:
            Define a opção que será pré-selecionada quando a página for carregada.
            <div class="code">
                <pre>&ltoption value="maca" selected>Maçã&lt/option></pre>
            </div>
        </li>
        <li>
            <strong>disabled</strong>:
            Desativa a opção, tornando-a não selecionável. Ela será visível, mas o usuário não poderá selecioná-la.
            <div class="code">
                <pre>&ltoption value="pera" disabled>Pera&lt/option></pre>
            </div>
        </li>
        <li>
            <strong>label</strong>:
            Define um texto alternativo para a opção, exibido quando o menu suspenso estiver sendo navegado com a tecla de navegação (acessibilidade).
            <div class="code">
                <pre>&ltoption value="mango" label="Manga (fruta tropical)">Mango&lt/option></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltoption></h2>
<ul>
    <li>
        <strong>Use o value Sempre</strong>:
        
        Defina valores claros e significativos para cada <code>&ltoption></code>, pois o valor é o que será enviado ao servidor quando o formulário for submetido.
    </li>
    <li>
        <strong>Evite Omissão do Atributo value</strong>:
        
        Embora seja possível omitir o <code>value</code>, isso pode causar confusão ou envio de dados incorretos. Sempre defina um valor para cada <option>.
    </li>
    <li>
        <strong>Organize com &ltoptgroup></strong>:
        
        Para listas grandes, use a tag <code>&ltoptgroup></code> para agrupar opções de maneira hierárquica. Isso melhora a navegação e torna a interface mais intuitiva.
    </li>
    <li>
        <strong>Use o selected com Cuidado</strong>:
        
        Defina a opção <code>selected</code> apenas para indicar a escolha padrão do usuário. Evite marcar opções como selecionadas de forma arbitrária.
    </li>
    <li>
        <strong>Acessibilidade</strong>:
        
        Use atributos como <code>label</code> para melhorar a experiência do usuário com leitores de tela e navegação por teclado.
    </li>
</ul>

<hr>

<p>A tag <code>&ltoption></code> é essencial para construir menus suspensos em formulários HTML, permitindo que o usuário selecione opções de maneira clara e eficiente. Com o uso adequado de atributos e boas práticas, você pode criar listas intuitivas e acessíveis.</p>
</div>

<?php
include_once '../footer.php';
?>