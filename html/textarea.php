<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lttextarea> HTML</h1>

    <p>A tag <code>&lttextarea></code> é usada para criar campos de texto multilinha em formulários HTML.
        Diferente do <code>&ltinput type="text"></code>, que é para textos curtos, o <code>&lttextarea></code> permite
        ao usuário digitar parágrafos, comentários ou mensagens longas.</p>

    <div class="code">
        <pre>&lttextarea>&lt/textarea></pre>
    </div>

    <textarea class="ml-20"></textarea>

    <hr>

    <h2>Principais atributos da &lttextarea></h2>
    <ul>
        <li><code>name</code>: Nome do campo, usado para envio do formulário.</li>

        <li><code>rows</code>: Número de linhas visíveis (altura).</li>

        <li><code>cols</code>: Número de colunas visíveis (largura).</li>

        <li><code>placeholder</code>: Texto de ajuda exibido dentro do campo.</li>

        <li><code>maxlength</code>: Limite máximo de caracteres.</li>

        <li><code>minlength</code>: Limite mínimo de caracteres (HTML5).</li>

        <li><code>readonly</code>: Impede que o usuário edite o conteúdo.</li>

        <li><code>disabled</code>: Desabilita o campo.</li>

        <li><code>required</code>: Torna o preenchimento obrigatório.</li>

        <li><code>wrap</code>: Define como a quebra de linha é tratada (<code>soft</code>, <code>hard</code>,
            <code>off</code>).</li>

        <li><code>autofocus</code>: Foca automaticamente o campo ao carregar a página.</li>

        <li><code>spellcheck</code>: Ativa ou desativa a correção ortográfica (<code>true</code> ou <code>false</code>).
        </li>
    </ul>

    <hr>

    <h2>Boas práticas</h2>
<ul>
    <li>Sempre use a tag <code>&ltlabel></code> para identificar a função do <code>&lttextarea></code>.</li>
    
    <li>Use <code>placeholder</code> com moderação para orientar o usuário, mas não substitua o <code>label</code> por ele.</li>
    
    <li>Defina <code>maxlength</code> para evitar mensagens muito longas (em comentários, por exemplo).</li>
    
    <li>Use <code>rows</code> e <code>cols</code> ou CSS (<code>width</code>, <code>height</code>) para controlar o tamanho visível do campo.</li>
    
    <li>Evite desabilitar o campo a menos que seja necessário, pois isso impede envio do valor.</li>
</ul>

<hr>

<p>A tag <code>&lttextarea></code> é essencial quando você precisa permitir a entrada de texto longo e flexível em formulários.
Ela é altamente configurável com atributos para tamanho, validação e comportamento, e deve ser usada com atenção à acessibilidade e experiência do usuário.</p>

</div>

<?php
include_once '../footer.php';
?>