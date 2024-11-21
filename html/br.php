<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltbr> HTML</h1>

    <p>A tag <code>&ltbr></code> é uma tag auto-fechada, ou seja, não possui uma tag de fechamento como outras tags (por exemplo,
    <code>&ltp>&lt/p></code>). Sua função é inserir uma quebra de linha no texto. Quando usada, o navegador "pula" para a linha seguinte,
    como se você tivesse pressionado a tecla Enter.</p>
    <p>Exemplo:</p>

    <div class="code">
        <pre>
&ltp>Este é um texto. <em>&ltbr></em> Este texto está na linha seguinte.&lt/p></pre>
    </div>
    <p>Este é um texto. <br> Este texto está na linha seguinte.</p>

    <p>A tag <code>&ltbr></code> é usada principalmente para adicionar quebras de linha dentro de elementos de texto contínuo, como parágrafos, títulos ou qualquer conteúdo textual que precise de um ajuste na linha sem iniciar um novo parágrafo.</p>

    <div class="code">
        <pre>
&ltp>Rosas são vermelhas, &ltbr> Violetas são azuis, &ltbr> Eu gosto de HTML, &ltbr> E você gosta também!&lt/p></pre>
    </div>
    <p>Rosas são vermelhas, <br> Violetas são azuis, <br> Eu gosto de HTML, <br> E você gosta também!</p>

    <hr>

    <h2>Uso Incorreto do &ltbr></h2>

    <p>Embora a tag <code>&ltbr></code> seja útil para quebras de linha, é importante evitar usá-la para criar espaçamento ou organizar o layout. Para esse propósito, o CSS deve ser utilizado, pois proporciona mais controle e flexibilidade sobre a aparência do conteúdo.</p>

    <hr>

    <p>A tag <code>&ltbr></code> é uma ferramenta simples e eficiente para inserir quebras de linha dentro de um bloco de texto, sendo útil para formatação de conteúdo como poemas ou endereços. No entanto, para espaçamento e layout, é sempre melhor utilizar o CSS, mantendo o HTML semântico e organizado.</p>
</div>

<?php
include_once '../footer.php';
?>