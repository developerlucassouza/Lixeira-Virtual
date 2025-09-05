<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>background-position CSS</h1>

    <p>A propriedade <code>background-position</code> define a posição inicial da imagem de fundo dentro de um elemento.
    </p>
    <p>Ela é usada em conjunto com <code>background-image</code> para determinar onde a imagem deve ficar presa
        (exemplo: canto superior esquerdo, centro, canto inferior direito, etc.).</p>

    <div class="code">
        <pre>
div {
    background-position: center top;
}</pre>
    </div>

    <hr>

    <h2>Valores possíveis</h2>

    <ul>
        <li>
            <h3>Palavras-chave (keywords)</h3>
            <ul>
                <li><code>left top</code>: canto superior esquerdo</li>
                <li><code>left center</code>: lado esquerdo, centralizado verticalmente</li>
                <li><code>left bottom</code>: canto inferior esquerdo</li>
                <li><code>center top</code>: topo, centralizado horizontalmente</li>
                <li><code>center center</code> (ou apenas <code>center</code>): centro exato</li>
                <li><code>center bottom</code>: parte de baixo, centralizado</li>
                <li><code>right top</code>: canto superior direito</li>
                <li><code>right center</code>: lado direito, centralizado verticalmente</li>
                <li><code>right bottom</code>: canto inferior direito</li>
            </ul>
            <div class="code">
                <pre>
div {
    background-position: right bottom;
}</pre>
            </div>
        </li>
        <li>
            <h3>Valores numéricos (unidades)</h3>
            <p>Você pode usar pixels, porcentagem ou outras unidades CSS.</p>
            <ul>
                <li><code>50% 50%</code>: centro (mesmo que <code>center center</code>)</li>

                <li><code>0% 0%</code>: canto superior esquerdo</li>

                <li><code>100% 100%</code>: canto inferior direito</li>

                <li><code>20px 40px</code>: deslocamento de 20px na horizontal e 40px na vertical</li>
            </ul>
            <div class="code">
                <pre>
div {
    background-position: 20px 40px;
}</pre>
            </div>
        </li>
        <li>
            <h3>Combinação de palavra-chave + valor</h3>

            <div class="code">
                <pre>
div {
    background-position: right 20px bottom 10px;
}</pre>
            </div>

            <p>Aqui a imagem ficará 20px afastada da borda direita e 10px afastada da borda inferior.</p>
        </li>
    </ul>

    <hr>

    <h2>Boas práticas</h2>

    <ul>
        <li>Combine sempre <code>background-position</code> com <code>background-repeat: no-repeat</code>, para ter
            controle real da posição.</li>

        <li>Use porcentagens para garantir que a posição seja proporcional em diferentes telas.</li>

        <li>O valor <code>center</code> é muito útil para imagens de ícones ou logotipos.</li>
    </ul>

    <hr>

    <p>A propriedade <code>background-position</code> dá controle sobre onde a imagem de fundo será exibida dentro do elemento.
Ela pode ser configurada usando palavras-chave, porcentagens ou valores fixos em pixels, permitindo desde posicionamentos simples até ajustes finos.</p>
</div>

<?php
include_once '../footer.php';
?>