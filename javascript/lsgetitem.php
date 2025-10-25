<?php
include_once '../header.php';
?>


<div class="lesson">
    <h1>Recuperando valores no localStorage</h1>
    <p>Utilizando o <code>localStorage.getItem()</code> podemos recuperar valores do localStorage para mostra-los na
        tela.</p>
    <div class="code">
        <pre>let <em>variável</em> = localStorage('<em>chave</em>');   </pre>
    </div>
    <p>Vamos recuperar o nome guardado <a href="lssetitem.php">anteriormente</a>.</p>
    <div class="code">
        <pre>
&ltbutton onclick="
    alert(localStorage.getItem('nome'));   
">Visualizar nome&lt/button></pre>
    </div>
    <button class="btn btn-secondary ml-20" onclick="
        alert(localStorage.getItem('nome'));
    ">Visualizar nome</button>
</div>

<?php
include_once '../footer.php';
?>