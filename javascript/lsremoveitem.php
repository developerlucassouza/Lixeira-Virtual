<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Removendo Item no localStorage</h1>
    <p>Utilizando a função <code>localStorage.removeItem()</code> podemos excluir valores e chaves do localStorage.</p>
    <div class="code">
        <pre>localStorage.removeItem('<em>chave</em>');   </pre>
    </div>
    <p>Vamos excluir o nome cadastrado <a href="lssetitem.php">anteriormente</a>.</p>
    <div class="code">
        <pre>
&ltbutton onclick="
    localStorage.removeItem('nome');   
    alert('Nome removido');
">Excluir nome&lt/button></pre>
    </div>
    <button class="btn btn-danger ml-20" onclick="
        localStorage.removeItem('nome');
        alert('Nome removido');
    ">Excluir nome</button>

    <hr>
    <p>Com a função <code>localStorage.clear()</code>, podemos excluir todos os valores do localStorage.</p>
    <div class="code">
        <pre>localStorage.clear();   </pre>
    </div>
</div>


<?php
include_once '../footer.php';
?>