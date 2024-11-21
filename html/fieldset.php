<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltfieldset> HTML</h1>

    <p>A tag <code>&ltfieldset></code> é usada no HTML para agrupar elementos de formulário em um conjunto lógico. Ela
        ajuda a organizar visualmente e semânticamente campos de formulário que pertencem a uma mesma categoria,
        tornando o formulário mais estruturado e fácil de entender para o usuário. O uso da tag
        <code>&ltfieldset></code> também melhora a acessibilidade, pois os leitores de tela conseguem entender que os
        campos agrupados pertencem a uma mesma seção.</p>
    <p>Além disso, a tag <code>&ltfieldset></code> é normalmente usada em conjunto com a tag <code>&ltlegend></code>,
        que fornece uma legenda ou título para o grupo de campos.</p>

    <hr>

    <h2>Estrutura básica da tag &ltfieldset></h2>

    <div class="code">
        <pre>
&ltform>
    &ltfieldset>
        &ltlegend>Informações Pessoais&lt/legend>

        &ltlabel for="nome">Nome:&lt/label>
        &ltinput type="text" id="nome" name="nome">

        &ltlabel for="email">E-mail:&lt/label>
        &ltinput type="email" id="email" name="email">
    &lt/fieldset>
&lt/form></pre>
    </div>

</div>

<?php
include_once '../footer.php';
?>