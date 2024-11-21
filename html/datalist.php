<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdatalist> HTML</h1>

    <p>A tag <code>&ltdatalist></code> no HTML é usada para fornecer uma lista de opções pré-definidas que podem ser
        selecionadas ao digitar em um campo de entrada (<code>&ltinput></code>). Essa lista é exibida automaticamente ao
        usuário conforme ele começa a digitar no campo, facilitando a seleção de valores válidos e economizando tempo na
        digitação.</p>

    <div class="code">
        <pre>
&ltinput list="opcoes">            
&ltdatalist id="opcoes">
    &ltoption value="Opção 1">
    &ltoption value="Opção 2">
    &ltoption value="Opção 3">
&lt/datalist></pre>
    </div>

    <p><input list="opcoes"></p>
    <datalist id="opcoes">
        <option value="Opção 1">
        <option value="Opção 2">
        <option value="Opção 3">
    </datalist>

    <ul>
        <li>A tag <code>&ltinput></code> usa o atributo <code>list</code> para se associar ao elemento
            <code>&ltdatalist></code> pelo seu <code>id</code>.
        </li>
        <li>A tag <code>&ltdatalist></code> contém múltiplas opções, especificadas com a tag <code>&ltoption></code>.
        </li>
    </ul>

    <hr>

    <h2>Utilidade e Vantagens do &ltdatalist></h2>
    <ul>
        <li>
            <strong>Melhora da Experiência do Usuário</strong>: A tag <code>&ltdatalist></code> facilita a escolha de
            valores,
            permitindo que o usuário
            veja
            as opções disponíveis enquanto digita. Isso economiza tempo e reduz erros de entrada.
        </li>

        <li>
            <strong>Validação de Dados</strong>: Embora o usuário ainda possa digitar algo fora das opções listadas, o
            <code>&ltdatalist></code> oferece
            sugestões que podem ser validadas posteriormente via JavaScript ou server-side.
        </li>

        <li>
            <strong>Flexibilidade</strong>: Diferente do <code>&ltselect></code>, que exige que o usuário selecione uma
            das opções
            fornecidas, o
            <code>&ltdatalist></code> permite que o usuário insira um valor personalizado.
        </li>
    </ul>

    <hr>

    <h2>Exemplo Prático</h2>

    <div class="code">
        <pre>
&ltform>
    &ltlabel for="cidade">Escolha uma cidade:</label>
    &ltinput list="cidades" id="cidade" name="cidade">

    &ltdatalist id="cidades">
        &ltoption value="São Paulo">
        &ltoption value="Rio de Janeiro">
        &ltoption value="Belo Horizonte">
        &ltoption value="Curitiba">
        &ltoption value="Porto Alegre">
    &lt/datalist>
&lt/form></pre>
    </div>

    <form>
        <p><label for="cidade">Escolha uma cidade:</label>
            <input list="cidades" id="cidade" name="cidade">
        </p>
        <datalist id="cidades">
            <option value="São Paulo">
            <option value="Rio de Janeiro">
            <option value="Belo Horizonte">
            <option value="Curitiba">
            <option value="Porto Alegre">
        </datalist>
    </form>

    <ul>
        <li>O usuário pode escolher uma cidade da lista sugerida enquanto digita no campo de entrada.</li>
        <li>Ele ainda tem a liberdade de digitar manualmente uma cidade que não esteja na lista.</li>
    </ul>

    <hr>

    <p>A tag <code>&ltdatalist></code> é uma excelente ferramenta para fornecer sugestões de valores a serem inseridos
        pelo usuário, combinando a facilidade de um campo de entrada com a eficiência de uma lista pré-definida de
        opções. Sua flexibilidade ao permitir que o usuário escolha uma opção sugerida ou digite um valor personalizado
        o torna uma escolha prática em diversos tipos de formulários.</p>
</div>

<?php
include_once '../footer.php';
?>