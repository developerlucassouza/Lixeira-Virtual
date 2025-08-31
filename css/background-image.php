<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>background-image CSS</h1>

    <p>A propriedade <code>background-image</code> define uma imagem como fundo de um elemento HTML.</p>
    <p>Diferente do <code>background-color</code>, que aplica apenas uma cor sólida, aqui podemos usar imagens, padrões ou até gradientes.</p>

    <div class="code">
        <pre>
p {
    background-image: url("caminho/da/imagem.jpg");
}</pre>
    </div>

    <p style="background-image: url('imgs/fundo-para-css.jpg'); color: black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam animi obcaecati maxime minus quos totam pariatur possimus, est molestiae voluptates repellendus praesentium vero voluptate reiciendis, quibusdam reprehenderit aspernatur quas odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut est vero amet ab, nostrum fugit in beatae aperiam eum nisi iure soluta maxime reprehenderit, blanditiis repellendus animi, recusandae dolorum quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iste dolor, ex minima molestiae sint laborum sapiente esse. Perspiciatis accusamus temporibus possimus quos aut corporis nihil ipsa cupiditate modi inventore!</p>

    <hr>

    <h2>Gradiente</h2>

    <p>Além de adicionar uma imagem de fundo, também é possível criar um gradiente usando o <code>linear-gradient</code>.</p>

    <div class="code">
        <pre>
p {
    background-image: <code>linear-gradient(to right, red, yellow)</code>;
}</pre>
    </div>

    <p style="background-image: linear-gradient(to right, red, yellow); color: black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam animi obcaecati maxime minus quos totam pariatur possimus, est molestiae voluptates repellendus praesentium vero voluptate reiciendis, quibusdam reprehenderit aspernatur quas odit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut est vero amet ab, nostrum fugit in beatae aperiam eum nisi iure soluta maxime reprehenderit, blanditiis repellendus animi, recusandae dolorum quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem iste dolor, ex minima molestiae sint laborum sapiente esse. Perspiciatis accusamus temporibus possimus quos aut corporis nihil ipsa cupiditate modi inventore!</p>

    <p>O <code>linear-gradient</code> aceita as seguintes direções:</p>
    <ul>
        <li><code>to top</code>: gradiente vai de baixo para cima</li>
        
        <li><code>to bottom</code>: de cima para baixo (padrão)</li>
        
        <li><code>to left</code>: da direita para a esquerda</li>
        
        <li><code>to right</code>: da esquerda para a direita</li>
    </ul>

    <p>Você também pode combinar horizontal e vertical:</p>

<ul>
    <li><code>to top left</code>: diagonal, indo da parte inferior direita para o topo esquerdo</li>
    
    <li><code>to top right</code>: diagonal, indo da parte inferior esquerda para o topo direito</li>
    
    <li><code>to bottom left</code>: diagonal, indo da parte superior direita para o canto inferior esquerdo</li>
    
    <li><code>to bottom right</code>: diagonal, indo da parte superior esquerda para o canto inferior direito</li>
</ul>

<hr>

<h2>Boas práticas</h2>

<ul>
    <li>Sempre otimize as imagens para web (arquivos menores carregam mais rápido).</li>
    
    <li>Combine <code>background-image</code> com propriedades como <code>background-size</code>, <code>background-position</code> e <code>background-repeat</code> para controlar a exibição.</li>
    
    <li>Prefira gradientes em CSS quando possível, pois economizam banda (não precisam de arquivo).</li>
</ul>

<hr>

<p>
    A propriedade <code>background-image</code> permite adicionar imagens e gradientes como fundo, enriquecendo visualmente a página.
    Ela se torna ainda mais poderosa quando usada em conjunto com outras propriedades do grupo background, garantindo controle total sobre a exibição.
</p>
</div>

<?php
include_once '../footer.php';
?>