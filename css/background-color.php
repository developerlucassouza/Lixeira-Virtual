<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>background-color CSS</h1>
    <p>A propriedade <code>background-color</code> define a cor de fundo de um elemento HTML.</p>
    <p>Ela pode ser aplicada em qualquer elemento: textos, seções, botões, tabelas, etc.</p>    

    <div class="code">
        <pre>
p {
    background-color: blue;
}</pre>
    </div>

    <p style="background-color: blue; color: white">Exemplo de Parágrafo com fundo colorido</p>

    <hr>

    <h2>Valores Aceitos</h2>

    <p>O <code>background-color</code> aceita diferentes formas de declarar cores:</p>
    <div class="code">
        <pre>
<span class="comentario">/* Nome da Cor */</span>
p {
  background-color: <em>yellow</em>;
}

<span class="comentario">/* Hexadecimal */</span>
p {
  background-color: <em>#ffcc00</em>;
}

<span class="comentario">/* RGB (Red, Green, Blue) */</span>
p {
  background-color: <em>rgb(255, 204, 0)</em>;
}

<span class="comentario">/* RGBA (RGB + Alpha/transparência) */</span>
p {
  background-color: <em>rgba(255, 204, 0, 0.5)</em>; <span class="comentario">/* 50% transparente */</span>
}

<span class="comentario">/* HSL (Hue, Saturation, Lightness) */</span>
p {
  background-color: <em>hsl(45, 100%, 50%)</em>;
}</pre>
    </div>

    <hr>

    <h2>Boas Práticas</h2>

<ul>
    <li>Use nomes de cores simples apenas em testes ou projetos pequenos.</li>
    
    <li>Prefira códigos hexadecimais ou RGB/HSL, pois são mais precisos e profissionais.</li>
    
    <li>O uso de RGBA é ótimo para criar fundos semi-transparentes, permitindo sobreposição suave.</li>
</ul>

<hr>

<p>A propriedade <code>background-color</code> é uma das mais básicas e importantes do CSS, permitindo definir cores de fundo sólidas para qualquer elemento.
Ela é flexível, pois aceita múltiplos formatos (nome, hexadecimal, RGB, RGBA, HSL), tornando possível criar desde fundos simples até efeitos visuais mais sofisticados com transparência.</p>

</div>

<?php
include_once '../footer.php';
?>