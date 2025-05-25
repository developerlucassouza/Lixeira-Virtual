<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltstrong> HTML</h1>

    <p>A tag <code>&ltstrong></code> é um elemento semântico do HTML utilizado para indicar que o conteúdo possui uma importância forte. Por padrão, navegadores aplicam negrito ao conteúdo dentro de <code>&ltstrong></code>, mas o real objetivo é semântico, não visual.</p>

    <div class="code">
        <pre>&ltstrong>Texto importante&lt/strong></pre>
    </div>

    <strong class="ml-20">Texto importante</strong>


    <hr>

    <h2>Quando usar a tag &ltstrong>?</h2>
<ul>
    <li>Quando uma parte do texto precisa ser destacada por sua importância, não apenas por aparência.</li>
    
    <li>Para indicar avisos, instruções ou mensagens cruciais.</li>
    
    <li>Em conteúdos que impactam a compreensão da mensagem.</li>
</ul>

<p>Use <code>&ltstrong></code> apenas quando a ênfase for importante para a interpretação. Para apenas destacar visualmente sem importância semântica, use <code>&ltspan></code> com CSS.</p>

<hr>

<h2>Acessibilidade e Semântica</h2>
<ul>
    <li>Leitores de tela podem adicionar uma ênfase vocal ao ler textos dentro de <code>&ltstrong></code>, beneficiando pessoas com deficiência visual.</li>
    
    <li>Melhora a acessibilidade e a compreensão do conteúdo.</li>
    
    <li>Ajuda mecanismos de busca (SEO) a entenderem o que é importante na página.</li>
</ul>

<hr>

<h2>Boas práticas</h2>
<ul>
    <li>Use <code>&ltstrong></code> para marcar informações que são realmente importantes para o usuário.</li>
    <li>Não use apenas para alterar visualmente — para isso, prefira <code>&ltspan></code> com CSS.</li>
    <li>Sempre combine com boas práticas de acessibilidade e SEO.</li>
</ul>

<hr>

<p>A tag <code>&ltstrong></code> é uma ferramenta essencial para criar conteúdos com clareza, acessibilidade e semântica.</p>

</div>

<?php
include_once '../footer.php';
?>