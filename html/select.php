<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltselect> HTML</h1>

    <p>A tag <code>&ltselect></code> é usada para criar um menu suspenso em formulários HTML. Ela permite que o usuário escolha uma ou mais opções de uma lista predefinida, que é definida usando as tags <code>&ltoption></code> (e opcionalmente <code>&ltoptgroup></code> para agrupamentos).</p>
    <div class="code">
        <pre>
&ltform>
    &ltlabel for="frutas">Escolha uma fruta:&lt/label>
    &ltselect id="frutas" name="fruta">
        &ltoption value="maçã">Maçã&lt/option>
        &ltoption value="banana">Banana&lt/option>
        &ltoption value="laranja">Laranja&lt/option>
    &lt/select>
&lt/form></pre>
    </div>

    <form style="padding:0px 20px">
    <label for="frutas">Escolha uma fruta:</label>
    <select id="frutas" name="fruta" class="form-control">
        <option value="maçã">Maçã</option>
        <option value="banana">Banana</option>
        <option value="laranja">Laranja</option>
    </select>
</form>

<hr>

<h2>Atributos da Tag &ltselect></h2>
<ul>
    <li>
        <code>name</code>: Define o nome do controle, que será enviado junto com o formulário.
        <div class="code">
            <pre>&ltselect <em>name="fruta"</em>>&lt/select></pre>
        </div>
    </li>
    <li>
        <code>size</code>: Determina o número de opções visíveis no menu suspenso. Se <code>size</code> for maior que 1, o menu aparece como uma lista.
        <div class="code">
            <pre>&ltselect <em>size="3"</em>>&lt/select></pre>
        </div>
    </li>
    <li>
        <code>multiple</code>: Permite que o usuário selecione várias opções ao mesmo tempo.
        <div class="code">
            <pre>&ltselect <em>multiple</em>>&lt/select></pre>
        </div>
    </li>
    <li>
        <code>disabled</code>: Desativa o menu, impedindo que o usuário interaja com ele.
        <div class="code">
            <pre>&ltselect <em>disabled</em>>&lt/select></pre>
        </div>
    </li>
    <li>
        <code>required</code>: Torna obrigatório que o usuário selecione pelo menos uma opção antes de enviar o formulário.
        <div class="code">
            <pre>&ltselect <em>required</em>>&lt/select></pre>
        </div>
    </li>
</ul>

<hr>

<h2>Boas Práticas no Uso da Tag &ltselect></h2>
<ul>
    <li>
        <strong>Use o Atributo label Associado ao Menu</strong>:
        Facilita a acessibilidade e melhora a experiência do usuário.
    </li>
    <li>
        <strong>Defina uma Opção Padrão</strong>:
        Inclua uma opção inicial (ex.: "Selecione uma opção") para orientar o usuário.
    </li>
    <li>
        <strong>Evite Listas Muito Longas</strong>:
        Para muitas opções, considere agrupá-las ou usar outro elemento, como <code>&ltdatalist></code>.
    </li>
</ul>

<hr>

<p>A tag <code>&ltselect></code> é uma ferramenta poderosa para criar menus suspensos e interativos em formulários HTML. Combinada com tags como <code>&ltoption></code> e <code>&ltoptgroup></code>, ela permite flexibilidade na criação de listas simples ou complexas. Aplicando boas práticas e estilização personalizada, você pode garantir uma experiência fluida e acessível para os usuários.</p>

</div>

<?php
include_once '../footer.php';
?>