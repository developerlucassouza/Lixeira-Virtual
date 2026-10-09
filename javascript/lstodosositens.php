<?php
include_once '../header.php';
?>


<div class="lesson">
    <h1>JS Mostrando Todos os Itens do localStorage</h1>
    <p>Juntando o laço <code><a href="for.php">for</a></code> com o <code>localStorage.length</code>, podemos mostrar
        todos os valores que estão no localStorage.</p>
    <div class="code">
        <pre>
for (let i = 0; i < localStorage.length; i++) {
    const chave = localStorage.key(i);
    const valor = localStorage.getItem(chave);

    document.write(`${chave}: ${valor} &ltbr>`);   
}</pre>
    </div>
</div>


<?php
include_once '../footer.php';
?>