<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltfooter> HTML</h1>

    <p>A tag <code>&ltfooter></code> é usada no HTML para definir o rodapé de uma página ou de uma seção específica de conteúdo. Ela normalmente contém informações sobre o autor, direitos autorais (copyright), links de navegação, termos de uso, política de privacidade, e outros detalhes relacionados ao conteúdo da página ou seção.</p>

    <p>O <code>&ltfooter></code> pode ser usado tanto para o rodapé global da página (geralmente o rodapé principal que aparece em todas as páginas de um site), quanto para o rodapé de uma seção específica (como o rodapé de um artigo ou um post).</p>

    <div class="code">
        <pre>
&ltfooter>
    &ltp>&copy; 2024 Lixeira Virtual. Todos os direitos reservados.&lt/p>
    &ltnav>
        &ltul>
        &ltli>&lta href="/termos-de-uso.html">Termos de Uso&lt/a>&lt/li>
        &ltli>&lta href="/politica-de-privacidade.html">Política de Privacidade&lt/a>&lt/li>
        &ltli>&lta href="/contato.html">Contato&lt/a>&lt/li>
        &lt/ul>
    &lt/nav>
&lt/footer></pre>
    </div>

    <p>Nesse exemplo, o <code>&ltfooter></code> contém um parágrafo de direitos autorais e um menu de navegação com links para outras páginas importantes, como "Termos de Uso", "Política de Privacidade" e "Contato".</p>

    <hr>

    <h2>Conteúdos comuns dentro de um &ltfooter></h2>
    <ul>
        <li><strong>Informações de Direitos Autorais</strong>: É muito comum ver declarações de direitos autorais dentro de rodapés.</li>
        <li><strong>Links de Navegação</strong>: Rodapés frequentemente contêm links importantes.</li>
        <li><strong>Informações de Contato</strong>: Detalhes como endereço físico, número de telefone e email também são frequentemente incluídos no rodapé.</li>
        <li><strong>Redes Sociais</strong>: Rodapés muitas vezes têm ícones ou links para perfis em redes sociais.</li>
        <li><strong>Avisos Legais</strong>: Notificações importantes, como o uso de cookies, ou links para o compliance de leis, como o LGPD ou GDPR (relacionados à proteção de dados).</li>
    </ul>

    <hr>

    <h2>Acessibilidade no &ltfooter></h2>
    <p>Usar a tag <code>&ltfooter></code> melhora a acessibilidade da página. Ferramentas como leitores de tela identificam automaticamente o conteúdo dentro de <code>&ltfooter></code> como parte do rodapé da página, ajudando pessoas com deficiência visual a navegar melhor pelo site.</p>

    <hr>

    <h2>Semântica do &ltfooter></h2>
    <p>Assim como outras tags semânticas no HTML5 (como <code>&ltheader></code>, <code>&ltarticle></code>, <code>&ltsection></code>), o <code>&ltfooter></code> melhora a estrutura e a legibilidade do código, tanto para desenvolvedores quanto para mecanismos de busca. Um rodapé semântico bem estruturado também é considerado bom para SEO, ajudando os motores de busca a entender melhor a hierarquia e os elementos da página.</p>
</div>

<?php
include_once '../footer.php';
?>