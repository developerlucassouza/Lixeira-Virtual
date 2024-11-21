<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltdd> HTML</h1>

    <p>A tag <code>&ltdd></code> (Definition Description) no HTML é usada para descrever um termo ou nome dentro de uma
        lista de definições. Ela sempre funciona em conjunto com a tag <code>&ltdl></code> (Definition List), que cria a
        lista de definições, e a tag <code>&ltdt></code> (Definition Term), que define o termo a ser descrito.</p>

    <div class="code">
        <pre>
&ltdl>
    &ltdt>HTML&lt/dt>
    &ltdd>Linguagem de marcação usada para criar páginas da web.&lt/dd>
  
    &ltdt>CSS&lt/dt>
    &ltdd>Linguagem de estilos utilizada para definir a aparência de páginas da web.&lt/dd>
&lt/dl></pre>
    </div>

    <br>

    <dl style="margin-left: 20px">
        <dt>HTML</dt>
        <dd>Linguagem de marcação usada para criar páginas da web.</dd>

        <dt>CSS</dt>
        <dd>Linguagem de estilos utilizada para definir a aparência de páginas da web.</dd>
    </dl>

    <ul>
        <li>A tag <code>&ltdl></code> cria a lista de definições.</li>
        <li>A tag <code>&ltdt></code> define o termo a ser descrito, neste caso, "HTML" e "CSS".</li>
        <li>A tag <code>&ltdd></code> fornece a descrição de cada termo.</li>
    </ul>

    <hr>

    <h2>Quando e Por que Usar a Tag &ltdd></h2>

    <ul>
        <li><strong>Organização de Conteúdo Definido</strong>: A tag <code>&ltdd></code> é ideal para listas que contêm
            definições de termos e suas
            descrições, como glossários, FAQs, ou listas de características de produtos.</li>

        <li><strong>Semântica e Acessibilidade</strong>: O uso correto das tags <code>&ltdl></code>,
            <code>&ltdt></code>, e
            <code>&ltdd></code> fornece uma estrutura semântica clara que ajuda na acessibilidade. Ferramentas de
            leitura de tela
            podem identificar que se trata de uma lista de definições, melhorando a experiência de navegação de
            usuários com deficiência.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltdd></code> desempenha um papel essencial na criação de listas de definições semânticas no HTML. Ela permite descrever claramente termos ou conceitos em um formato organizado e fácil de entender. Juntamente com as tags <code>&ltdl></code> e <code>&ltdt></code>, o uso do <code>&ltdd></code> proporciona uma estrutura limpa e acessível para glossários, FAQs e outros tipos de conteúdos explicativos.</p>
</div>

<?php
include_once '../footer.php';
?>