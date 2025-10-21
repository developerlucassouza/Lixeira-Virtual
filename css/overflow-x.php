<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>overflow-x CSS</h1>
    <p>A propriedade <code>overflow-x</code> controla como o conteúdo que ultrapassa horizontalmente (no eixo X) o
        tamanho de um elemento será exibido.</p>
    <p>Em outras palavras, ela define o que acontece quando algo “passa dos limites” da largura de um elemento.</p>

    <div class="code">
        <pre>overflow-x: <em>valor</em>;</pre>
    </div>

    <hr>

    <h2>Valores Possíveis</h2>

<ul>
    <li><code>visible</code>: o conteúdo que ultrapassa aparece normalmente (padrão).</li>
    
    <li><code>hidden</code>: o conteúdo excedente é cortado e não fica visível.</li>
    
    <li><code>scroll</code>: sempre mostra uma barra de rolagem horizontal, mesmo que não haja necessidade.</li>
    
    <li><code>auto</code>: adiciona a barra de rolagem apenas quando o conteúdo realmente ultrapassa os limites.</li>
</ul>

<hr>

<p>A propriedade <code>overflow-x</code> é essencial para controlar a rolagem e o corte horizontal de conteúdo, garantindo que o layout permaneça organizado mesmo com textos longos, imagens grandes ou tabelas extensas. Usá-la corretamente melhora tanto o design quanto a usabilidade do site.</p>
</div>

<?php
include_once '../footer.php';
?>