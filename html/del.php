<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdel> HTML</h1>

    <p>A tag <code>&ltdel></code> (abreviação de <em>delete</em>, ou "deletar" em inglês) é utilizada para marcar um texto como excluído ou removido. Quando aplicada, o navegador renderiza o texto com uma linha atravessando-o, o que indica que o conteúdo foi retirado ou alterado.</p>

    <div class="code">
        <pre>Este texto contém algo <em>&ltdel>removido&lt/del></em>.</pre>
    </div>

    <p>Este texto contém algo <del>removido</del>.</p>

    <hr>

    <h2>Quando usar a tag &ltdel>?</h2>

    <p>A tag <code>&ltdel></code> é recomendada quando você quer mostrar que um texto foi removido ou alterado em uma versão posterior de um documento. Ela é comumente usada em textos editáveis, como termos de serviço, contratos, ou em revisões de artigos.</p>

</div>

<?php
include_once '../footer.php';
?>