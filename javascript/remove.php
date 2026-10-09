<?php
include_once '../header.php';
?>


<div class="lesson">
    <h1>JS Excluindo Elementos DOM</h1>
    <p>Utilizando a função <code>.remove()</code>, podemos excluir elementos HTML.</p>
    <div class="code">
        <pre>
<span class="comentario">// Selecionando elemento</span>
let paragrafo = document.querySelector('p#principal');   

<span class="comentario">// Removendo parágrafo</span>
paragrafo.remove();</pre>
    </div>
</div>


<?php
include_once '../footer.php';
?>