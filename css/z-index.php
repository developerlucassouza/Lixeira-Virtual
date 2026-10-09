<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>z-index CSS</h1>
    <p>
        A propriedade <code>z-index</code> define a ordem de empilhamento (ou profundidade) dos elementos que se
        sobrepõem na página.
        Em termos simples: quem aparece por cima de quem.
    </p>

    <p>Ela só funciona em elementos posicionados, ou seja, com <code>position</code> definido como
        <code>relative</code>, <code>absolute</code>, <code>fixed</code> ou <code>sticky</code>.</p>

    <div class="code">
        <pre>z-index: <em>valor</em>;</pre>
    </div>

    <hr>

    <h2>Valores Possíveis</h2>

<ul>
    <li><code>auto</code>: segue a ordem natural do documento (padrão).</li>
    
    <li>
        <code>número inteiro</code>: define a prioridade de empilhamento.
        
        <ul>
            <li>Valores maiores aparecem à frente.</li>
            
            <li>Valores menores ficam atrás.</li>
        </ul>
    </li>
</ul>

<hr>

<h2>Boas Práticas</h2>

<ul>
    <li>O <code>z-index</code> não tem efeito em elementos com position: static (padrão).</li>
    
    <li>Evite usar valores muito altos (como 9999) — isso dificulta a manutenção do código.</li>
    
    <li>Quando um elemento cria um novo contexto de empilhamento, seus filhos não podem ultrapassar elementos fora desse contexto, mesmo com <code>z-index</code> alto.</li>
</ul>

<hr>

<p>A propriedade <code>z-index</code> é essencial para controlar a hierarquia visual dos elementos, especialmente quando há sobreposições no layout.
Dominar o <code>z-index</code> ajuda a evitar bugs visuais e garante que cada camada da página apareça na ordem correta, mantendo o design limpo e funcional.</p>
</div>

<?php
include_once '../footer.php';
?>