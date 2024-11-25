<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltlabel> HTML</h1>

    <p>A tag <code>&ltlabel></code> é usada para fornecer um rótulo descritivo a um elemento de formulário, como
        <code>&ltinput></code>, <code>&ltselect></code> ou <code>&lttextarea></code>. Ela melhora a usabilidade e a
        acessibilidade ao permitir que os usuários saibam qual é o propósito de um campo específico.</p>

    <div class="code">
        <pre>
&ltlabel for="nome">Nome:&lt/label>
&ltinput type="text" id="nome" name="nome"></pre>
    </div>

    <div style="padding:0px 20px">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>

    <hr>

    <h2>Por que usar a tag &ltlabel>?</h2>
    <ul>
        <li>
            <strong>Acessibilidade</strong>: Facilita a navegação por teclado e ajuda leitores de tela a interpretar
            corretamente os campos do formulário.
        </li>
        <li>
            <strong>Usabilidade</strong>: Permite que o usuário clique no rótulo para ativar ou focar no campo
            associado.
        </li>
        <li>
            <strong>Organização</strong>: Cria uma interface mais clara e intuitiva.
        </li>
    </ul>

    <hr>

    <h2>Estrutura da Tag &ltlabel></h2>
    <p>A tag <code>&ltlabel></code> pode ser usada de duas formas:</p>

    <ul>
        <li>
            <strong>Associada a um elemento por <code>for</code></strong>: Usa o atributo for para vincular a um
            elemento pelo seu id.
            <div class="code">
                <pre>
&ltlabel <em>for="email"</em>>Email:&lt/label>
&ltinput type="email" <em>id="email"</em> name="email"></pre>
            </div>
        </li>
        <li>
            <strong>Aninhada diretamente ao elemento</strong>: O rótulo contém o elemento dentro de si.
            <div class="code">
                <pre>
&ltlabel>
    Senha:
    &ltinput type="password" name="senha">
&lt/label></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas</h2>
<ul>
    <li>
        <strong>Sempre use for ou aninhamento</strong>:
        Isso garante que o rótulo seja funcional e acessível.
    </li>
    <li>
        <strong>Faça descrições claras</strong>:
        O texto do <code>&ltlabel></code> deve descrever claramente a finalidade do campo.
    </li>
    <li>
        <strong>Estilize com consistência</strong>:
        Use CSS para manter uma aparência uniforme em todos os rótulos.
    </li>
    <li>
        <strong>Combine com atributos de acessibilidade</strong>:
        Use atributos como <code>aria-labelledby</code> e <code>aria-describedby</code> para complementar a acessibilidade, se necessário.
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>