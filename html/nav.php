<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltnav> HTML</h1>
    <p>A tag <code>&ltnav></code> é um elemento semântico introduzido no HTML5 para agrupar links de navegação dentro de uma página. Ela indica ao navegador e aos mecanismos de busca que os links contidos são destinados à navegação principal ou secundária do site.</p>
    <div class="code">
        <pre>
&ltnav>
    &ltul>
        &ltli>&lta href="#inicio">Início&lt/a>&lt/li>
        &ltli>&lta href="#sobre">Sobre&lt/a>&lt/li>
        &ltli>&lta href="#contato">Contato&lt/a>&lt/li>
    &lt/ul>
&lt/nav></pre>
    </div>

    <hr>

    <h2>Características Principais da Tag &ltnav></h2>
<ul>
    <li><strong>Semântica</strong>: Facilita a identificação de seções de navegação no site.</li>
    <li><strong>Acessibilidade</strong>: Melhora a experiência de navegação para usuários que utilizam leitores de tela.</li>
    <li><strong>Organização</strong>: Agrupa links de navegação para estruturar melhor o código.</li>
</ul>

<hr>

<h2>Quando Usar a Tag &ltnav>?</h2>
<ul>
    <li>Para criar menus de navegação principais (header, sidebar, etc.).</li>
    <li>Para adicionar menus secundários, como rodapés com links de navegação adicionais.</li>
    <li>Não use a tag <code>&ltnav></code> para links isolados ou que não estão diretamente relacionados à navegação.</li>
</ul>

<hr>

<h2>Benefícios da Tag &ltnav></h2>
<ul>
    <li>
        <strong>Acessibilidade</strong>:
        Leitores de tela identificam <code>&ltnav></code> como um contêiner de navegação, permitindo que usuários com deficiências se movimentem rapidamente pelo site.
    </li>
    <li>
        <strong>SEO</strong>:
        Motores de busca compreendem que o conteúdo dentro de <code>&ltnav></code> é relacionado à navegação, melhorando a indexação.
    </li>
    <li>
        <strong>Manutenção de Código</strong>:
        Facilita a separação semântica entre a navegação e outras partes do documento.
    </li>
</ul>

<hr>

<h2>Boas Práticas no Uso da Tag &ltnav></h2>
<ul>
    <li>
        <strong>Apenas para Navegação</strong>:
        Use <code>&ltnav></code> apenas para agrupar links diretamente relacionados à navegação.
    </li>
    <li>
        <strong>Um &ltnav> por Seção Relevante</strong>:
        Normalmente, há um <code>&ltnav></code> principal no <code>&ltheader></code> e outro no <code>&ltfooter></code> se necessário.
    </li>
    <li>
        <strong>Links Internos ou Importantes</strong>:
        Coloque apenas links que realmente ajudam o usuário a navegar no site, evitando links irrelevantes.
    </li>
    <li>
        <strong>Combine com Aria</strong>:
        Adicione atributos como <code>aria-label</code> para descrever o tipo de navegação:
        <div class="code">
            <pre>
&ltnav <em>aria-label="Menu Principal"</em>>
    &ltul>
        &ltli>&lta href="#inicio">Início&lt/a>&lt/li>
        &ltli>&lta href="#sobre">Sobre&lt/a>&lt/li>
    &lt/ul>
&lt/nav></pre>
        </div>
    </li>
</ul>

<hr>

<p>A tag <code>&ltnav></code> é um elemento semântico poderoso para estruturar menus de navegação, tanto para SEO quanto para acessibilidade. Usá-la corretamente melhora a organização do código e a experiência do usuário, especialmente em sites modernos e responsivos.</p>

</div>

<?php
include_once '../footer.php';
?>