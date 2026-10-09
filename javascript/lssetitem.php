<?php
include_once '../header.php';
?>


<div class="lesson">
    <h1>Armazenando valores no localStorage</h1>

    <p>Com a função <code>localStorage.setItem()</code> irá criar/alterar valores do localStorage em uma determinada
        chave.</p>
    <div class="code">
        <pre>localStorage.setItem('<em>chave</em>', <em>valor</em>);   </pre>
    </div>
    <p>Veja um exemplo cadastrando um nome:</p>
    <div class="code">
        <pre>
&ltbutton onclick="
    let nome = prompt('Digite seu nome');   
    localStorage.setItem('nome', nome);
">Chamar prompt&lt/button></pre>
    </div>
    
    <button class="btn btn-primary ml-20" onclick="
        let nome = prompt('Digite seu nome');
        localStorage.setItem('nome', nome);
    ">Chamar prompt</button>

    <button class="btn btn-secondary ml-20" onclick="
        alert(localStorage.getItem('nome'));
    ">Visualizar nome</button>
</div>


<?php
include_once '../footer.php';
?>