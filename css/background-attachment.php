<?php
include_once '../header.php';
?>

<style>
    .fundo {
        background-image: url("imgs/fundo-para-css.jpg");
        background-size: cover;
        color: white;
        font-weight: bolder;
        height: 300px;
        width: 95%;
    }
</style>

<div class="lesson">
    <h1>background-attachment CSS</h1>

    <p>A propriedade <code>background-attachment</code> define se o fundo de um elemento rola junto com o conteúdo ou fica fixo na tela, mesmo durante o scroll da página.</p>

    <div class="code">
        <pre>
<i>seletor</i> {
    background-attachment: <i>valor</i>;
}</pre>
    </div>

    <hr>

    <h2>Valores Possíveis</h2>

    <ul>
        <li>
            <code>scroll</code>: Fundo rola junto com o conteúdo (padrão)
            <div class="code">
                <pre><i>seletor</i> { <em>background-attachment: scroll;</em> }</pre>
            </div>

            <div class="fundo" style="background-attachment: scroll;">
                <p>Conteúdo da div</p>
            </div>
        </li>

        <hr>

        <li class="">
            <code>fixed</code>: Fundo **fica fixo** na tela, mesmo quando você rola a página
            <div class="code">
                <pre><i>seletor</i> { <em>background-attachment: fixed;</em> }</pre>
            </div>

            <div class="fundo" style="background-attachment: fixed;">
                <p>Conteúdo da div</p>
            </div>
            <ul>
                <li>O valor fixed só tem efeito visível quando o elemento ou a página é rolável.</li>

                <li>Em dispositivos móveis, nem todos os navegadores suportam bem o fixed.</li>
            </ul>
        </li>

        <hr>

        <li class="">
            <code>local</code>: Fundo rola junto com o conteúdo rolável do próprio elemento (raro uso)
            <div class="code">
                <pre><i>seletor</i> { <em>background-attachment: local;</em> }</pre>
            </div>

            <div class="fundo" style="background-attachment: local; overflow: auto;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quam officiis, voluptas quas quod excepturi suscipit quisquam et laudantium eos dolores illum cum a adipisci voluptatem itaque? Quidem, optio placeat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, suscipit commodi ex libero doloribus nesciunt molestiae quasi quidem dolorum sint aperiam temporibus ab facilis ullam delectus. Ullam perspiciatis illo ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus architecto deleniti aliquid molestiae? Qui, quaerat ipsa vel sequi commodi iure laboriosam! Est placeat facere corrupti magni eius consequuntur perspiciatis blanditiis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, doloremque. Iste consequatur excepturi veritatis ex iure cum autem perferendis sit, nihil velit fuga optio dolor expedita quibusdam odio vel voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quam officiis, voluptas quas quod excepturi suscipit quisquam et laudantium eos dolores illum cum a adipisci voluptatem itaque? Quidem, optio placeat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, suscipit commodi ex libero doloribus nesciunt molestiae quasi quidem dolorum sint aperiam temporibus ab facilis ullam delectus. Ullam perspiciatis illo ipsum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus architecto deleniti aliquid molestiae? Qui, quaerat ipsa vel sequi commodi iure laboriosam! Est placeat facere corrupti magni eius consequuntur perspiciatis blanditiis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, doloremque. Iste consequatur excepturi veritatis ex iure cum autem perferendis sit, nihil velit fuga optio dolor expedita quibusdam odio vel voluptatibus.
                </p>
            </div>

            <p>O valor <code>local</code> só funciona corretamente quando o próprio elemento tem rolagem interna, ou seja, precisa ter <code>overflow: auto</code> (ou <code>scroll</code>) e conteúdo suficiente para ultrapassar sua altura definida.</p>
        </li>
    </ul>

    <hr>

    <p>A propriedade <code>background-attachment</code> é usada para definir como a imagem de fundo se comporta em relação à rolagem da página ou de um elemento. Ela permite criar efeitos visuais interessantes, como o famoso efeito de fundo fixo, muito usado em sites modernos e páginas de apresentação.</p>
</div>

<?php
include_once '../footer.php';
?>