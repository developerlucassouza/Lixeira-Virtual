<?php
include_once '../header.php';
?>


<div class="lesson">
    <h1>JS Função Fatorial</h1>
    <p>Existe uma maneira recursiva e simples para fazer uma função de fatorial.</p>
    <div class="code">
        <pre>
function fatorial(numero) {
    if (numero === 0 || numero === 1) {
        return 1;
    } else {
        return numero * fatorial(numero - 1);   
    }
}</pre>
    </div>
</div>


<?php
include_once '../footer.php';
?>