<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>overflow-y CSS</h1>
    <p>A propriedade <code>overflow-y</code> controla como o conteúdo que ultrapassa verticalmente (no eixo Y) o tamanho
        de um elemento será exibido.</p>
    <p>Ela é responsável por gerenciar o que acontece quando o conteúdo é maior que a altura do contêiner.</p>

    <div class="code">
        <pre>overflow-y: valor;</pre>
    </div>

    <hr>

    <h2>Valores Possíveis</h2>

    <ul>
        <li><code>visible</code>: o conteúdo que ultrapassa aparece normalmente (padrão).</li>

        <li><code>hidden</code>: o conteúdo excedente é cortado e não fica visível.</li>

        <li><code>scroll</code>: sempre mostra uma barra de rolagem vertical, mesmo que não haja necessidade.</li>

        <li><code>auto</code>: adiciona a barra de rolagem somente quando o conteúdo realmente ultrapassa o limite vertical.</li>
    </ul>

    <hr>

    <p>
        A propriedade <code>overflow-y</code> é fundamental para controlar a rolagem vertical e o corte de conteúdo excedente, especialmente em áreas de texto, tabelas ou caixas com altura fixa.
        Ela contribui diretamente para a organização e acessibilidade do design, evitando que o conteúdo transborde ou distorça o layout.
    </p>
</div>

<?php
include_once '../footer.php';
?>