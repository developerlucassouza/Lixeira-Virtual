<?php
include_once '../header.php';
?>

<style>
        input[type=button] {
            display: block;
            margin: auto;
            padding: 10px 30px;
        }

        input[type=button]:hover {
            box-shadow: 0px 0px 10px red;
        }
    </style>

<div class="lesson">
    <h1>box-shadow CSS</h1>
        <p>A propriedade <code>box-shadow</code> é utilizada para criar sombras em elementos HTML, criando um efeito tridimensional que pode melhorar o apelo visual de um design. Ela permite que você crie sombras ao redor de um elemento, como caixas, texto ou qualquer outro elemento que você deseje destacar.</p>

        <div class="code">
            <pre>box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);   </pre>
        </div>

        <div style="background-color: red; width: 150px; height: 100px; margin: 10px auto; text-align: center; line-height: 100px;">Sem Sombra</div>
        <div style="box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); background-color: red; width: 150px; height: 100px; margin: 10px auto; text-align: center; line-height: 100px;">Com Sombra</div>

        <p>Os valores do <code>box-shadow</code> são definidos na seguinte ordem:</p>
        <ol>
            <li>Deslocamento na Horizontal (x)</li>
            <li>Deslocamento na Vertical (y)</li>
            <li>Desfoque (Blur Radius)</li>
            <li>Espalhamento (Spread)</li>
            <li>Cor da Sombra (de preferência preto)</li>
        </ol>

        <hr>

        <p>Com o <code>box-shadow</code> e a pseudo-classe <code>hover</code>, podemos criar um efeito ao passar o mouse em um botão:</p>

        <div class="code">
            <pre>
input[type=button]:hover {
    box-shadow: 0px 0px 10px red;   
}</pre>
        </div>

        <input type="button" value="Botão">
</div>

<?php
include_once '../footer.php';
?>