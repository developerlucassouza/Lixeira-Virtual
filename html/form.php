<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltform> HTML</h1>
    <p>A tag <code>&ltform></code> é um dos elementos mais importantes no HTML, usada para criar formulários interativos
        em páginas web. Ela permite que os usuários insiram dados e enviem essas informações para um servidor ou outro
        destino para serem processadas. Formulários são essenciais para muitas funcionalidades em sites, como cadastros,
        login, pesquisas, encomendas, entre outros.</p>

    <p>O <code>&ltform></code> funciona como um contêiner para campos de entrada, botões e outros elementos relacionados
        ao envio de dados.</p>

    <hr>

    <h2>Estrutura básica da tag &ltform></h2>
    <div class="code">
        <pre>
&ltform action="processa_form.php" method="POST">
    &ltlabel for="nome">Nome:&lt/label>
    &ltinput type="text" id="nome" name="nome">

    &ltlabel for="email">Email:&lt/label>
    &ltinput type="email" id="email" name="email">

    &ltinput type="submit" value="Enviar">
&lt/form></pre>
    </div>

    <hr>

    <h2>Atributos principais da tag &ltform></h2>
    <ul>
        <li class="mb-2">
            <strong>action</strong>:
            Especifica a URL do script ou página para onde os dados do formulário serão enviados para serem processados.
            <br>Exemplo: action="processa_form.php"
            <br>Se omitido, os dados do formulário serão enviados para a mesma página.
        </li>
        <li class="mb-2">
            <strong>method</strong>:
            Define o método HTTP que será usado para enviar os dados do formulário.
            <br>Os valores mais comuns são:
            <ul>
                <li>GET: Os dados do formulário são enviados via URL (visíveis na barra de endereços do navegador).</li>
                <li>
                    POST: Os dados do formulário são enviados como parte do corpo da requisição (mais seguro e usado para envio
                    de informações confidenciais).
                </li>
            </ul>
            Exemplo: method="post"
        </li>
        <li class="mb-2">
            <strong>enctype</strong>:
            Define como os dados do formulário serão codificados ao serem enviados ao servidor.
            <br>Exemplo: enctype="multipart/form-data" (usado para envio de arquivos).
            <br>O valor padrão é application/x-www-form-urlencoded.
        </li>
    </ul>
</div>

<?php
include_once '../footer.php';
?>