<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Operador Ternário JS</h1>
    <p>O operador ternário, também conhecido como operador condicional, é um operador em muitas linguagens de
        programação que permite escrever uma expressão condicional de forma mais concisa. Em JavaScript, o operador
        ternário tem a seguinte sintaxe:</p>
    <div class="code">
        <pre><em>condição</em> ? <em>Valor se Verdadeiro</em> : <em>Valor se Falso</em>;   </pre>
    </div>
    <hr>
    <p>Vamos imaginar o seguinte código:</p>
    <div class="code">
        <pre>
if (x > 10) {
    let frase = "Maior que 10";
} else {
    let frase = "Não é maior que 10";
}</pre>
    </div>
    <p>Com o Operador Ternário, podemos simplificar essas cinco linhas para apenas uma.</p>
    <div class="code">
        <pre>let frase = (x > 10) ? "Maior que 10" : "Não é maior que 10";   </pre>
    </div>
</div>


<?php
include_once '../footer.php';
?>