<?php
include_once '../header.php';
?>

<style>
        div.exemplo {
            background-color: cyan;
            padding: 20px;

        }

        div.exemplo:hover {
            background-color: red;
        }

        div.exemplo2 {
            transition-duration: 1s;
        }
    </style>

<div class="lesson">
    <h1>transition-duration CSS</h1>
    <p>
        A propriedade <code>transition-duration</code> define quanto tempo uma transição CSS deve durar — ou seja, a
        velocidade da
        animação entre o estado inicial e o final de um elemento quando uma mudança ocorre (por exemplo, ao passar o
        mouse).
    </p>

    <p>Ela é usada junto com outras propriedades de transição, como <code>transition-property</code> e
        <code>transition-timing-function</code>.</p>

    <div class="code">
        <pre>transition-duration: <em>tempo</em>;</pre>
    </div>

    

    <div class="exemplo">hover sem o transition-duration</div>
    <br>
    <div class="exemplo exemplo2">hover com o transition-duration</div>

    <hr>

    <p>A propriedade <code>transition-duration</code> é essencial para criar transições suaves e elegantes, controlando
        o tempo que uma animação leva para ocorrer.
        Usar durações equilibradas melhora a experiência do usuário e deixa o site com um visual mais fluido e
        profissional.</p>
</div>

<?php
include_once '../footer.php';
?>