<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltspan> HTML</h1>
    <p>A tag <code>&ltspan></code> é um elemento genérico e inline usado para agrupar partes de texto ou outros elementos inline, sem adicionar significado semântico. Ela é muito utilizada para aplicar estilos com CSS ou interações com JavaScript em partes específicas de um conteúdo.</p>

    <div class="code">
        <pre><span>Esse texto está dentro de um span</span></pre>
    </div>

    <span class="ml-20">Esse texto está dentro de um span</span>

    <hr>

    <h2>Quando usar a tag &ltspan>?</h2>
<ul>
    <li>Para destacar ou modificar o estilo de parte de um texto.</li>
    
    <li>Para manipular elementos via JavaScript.</li>
    
    <li>Quando não há outro elemento semântico mais adequado.</li>
</ul>

<p>Importante: Use <code>&ltspan></code> somente quando não existir um elemento HTML que já defina o significado daquela parte do conteúdo (como <code>&ltstrong></code>, <code>&ltem></code>, <code>&ltmark></code>, etc.).</p>

<hr>

<h2>Boas práticas</h2>
<ul>
    <li>Use <code>&ltspan></code> apenas para aplicar estilos ou interações a pequenos trechos.</li>
    <li>Prefira elementos semânticos sempre que possível (ex.: <code>&ltstrong></code>, <code>&ltem></code>).</li>
    <li>Não exagere no uso, para evitar um HTML poluído e difícil de manter.</li>
    <li>Sempre combine <code>&ltspan></code> com classes ou IDs significativos.</li>
</ul>

<hr>

<p>A <code>&ltspan></code> é uma ferramenta poderosa para estilização e interação, mas, por ser genérica, deve ser usada com cuidado e consciência.</p>

</div>

<?php
include_once '../footer.php';
?>