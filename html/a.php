<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lta> HTML</h1>
    <p>A tag <code>&lta></code> é a abreviação de anchor (âncora, em português). Essa tag é essencial no HTML, pois ela
        é responsável por criar hiperlinks. Ou seja, é através da tag <code>&lta></code> que podemos transformar textos,
        imagens ou outros elementos em links clicáveis, que redirecionam os usuários para outras páginas, documentos, ou
        seções da própria página.</p>

    <p>A estrutura básica de um link usando <code>&lta></code> é a seguinte:</p>

    <div class="code">
        <pre>
&lta href="https://example.com">Clique aqui&lt/a></pre>
    </div>

    <p>Neste exemplo, o texto "Clique aqui" é um link que leva o usuário ao site https://example.com. O atributo
        <code>href</code> dentro da tag <code>&lta></code> indica o destino do link, ou seja, para onde o usuário será
        redirecionado ao clicar. <br>
        Exemplo: <a href="https://example.com" target="_blank">Clique aqui</a>
    </p>

    <hr>

    <h2>Atributos</h2>

    <p>A tag <code>&lta></code> possui diversos atributos que definem seu comportamento e os destinos que ela pode
        alcançar. Os principais atributos são:</p>

    <ul>
        <li>
            <strong>href (Hypertext Reference):</strong>
            <p>
                O atributo <code>href</code> é o mais importante da tag <code>&lta></code>. Ele define o destino do
                link. Pode ser um site externo, um caminho
                local para um arquivo, ou até uma âncora dentro da mesma página.
                Exemplo:
            </p>
            <div class="code">
                <pre>
&lta <em>href="https://meusite.com"</em>>Visite meu site&lt/a></pre>
            </div>

            <p>Links para páginas internas:</p>
            <div class="code">
                <pre>
&lta <em>href="/sobre.html"</em>>Sobre nós&lt/a></pre>
            </div>
        </li>

        <li>
            <strong>target:</strong>
            <p>O atributo <code>target</code> define onde o link será aberto. Ele pode ter diferentes valores:</p>
            <ul>
                <li>
                    <strong>_self (padrão)</strong>: Abre o link na mesma aba ou janela.
                    <div class="code">
                        <pre>
&lta href="https://google.com" <em>target="_self"</em>>Abrir na mesma aba&lt/a>   </pre>
                    </div>
                    <a href="https://google.com" target="_self">Abrir na mesma aba</a>
                </li>
                <li>
                    <strong>_blank</strong>: Abre o link em uma nova aba ou janela.
                    <div class="code">
                        <pre>
&lta href="https://google.com" <em>target="_blank"</em>>Abrir em nova aba&lt/a></pre>
                    </div>
                    <a href="https://google.com" target="_blank">Abrir em nova aba</a>
                </li>
                <li>_parent: Abre o link no frame pai, caso a página esteja em um iframe.</li>
                <li>_top: Abre o link no topo da hierarquia de frames, ou seja, na janela completa.</li>
            </ul>
        </li>


        <li>
            <strong>title</strong>:
            <p>
                O atributo <code>title</code> adiciona uma dica ou explicação que aparece ao passar o mouse sobre o
                link. Isso melhora a
                acessibilidade e a experiência do usuário.
                Exemplo:
            </p>
            <div class="code">
                <pre>
&lta href="https://example.com" <em>title="Visite o meu site para mais informações"</em>>Visite meu site&lt/a></pre>
            </div>
            <a href="https://example.com" title="Visite o meu site para mais informações">Visite meu site</a>
        </li>
        <li>
            <strong>rel</strong>:
            <p>
                O atributo <code>rel</code> define a relação entre a página atual e o destino do link. Ele é amplamente
                utilizado para SEO e segurança, principalmente com links externos. Exemplo de uso comum:
            </p>
            <div class="code">
                <pre>
&lta href="https://externosite.com" <em>rel="noopener noreferrer"</em> target="_blank">Site Externo&lt/a></pre>
            </div>
            <p>
                Aqui, o <code>rel="noopener noreferrer"</code> é recomendado quando você usa
                <code>target="_blank"</code>, pois impede que a nova página tenha acesso ao objeto window da página
                original, aumentando a segurança.
            </p>
        </li>
        <li>
            <strong>download</strong>:
            <p>
                O atributo download transforma o link em um download direto de arquivos. Em vez de redirecionar para a
                visualização do arquivo, o navegador baixa o arquivo diretamente. Exemplo:
            </p>
            <div class="code">
                <pre>
&lta href="/downloads/ebook.pdf" <em>download</em>>Baixar Ebook&lt/a> </pre>
            </div>
            Ao clicar no link, o arquivo ebook.pdf será baixado automaticamente.
        </li>
    </ul>

    <hr>

    <h2>Usando &lta> para navegação interna</h2>
    <p>
        A tag <code>&lta></code> também pode ser usada para navegar dentro da própria página, através de âncoras. Para
        isso, usamos o atributo id nos elementos de destino e o <code>href</code> com o valor correspondente ao id.
        Exemplo de navegação interna:
    </p>
    <div class="code">
        <pre>
&lta <em>href="#secao2"</em>>Ir para a Seção 2&lt/a>

&lth2 <em>id="secao2"</em>>Seção 2&lt/h2>
&ltp>Este é o conteúdo da Seção 2.&lt/p></pre>
    </div>
    <p>Nesse exemplo, ao clicar em "Ir para a Seção 2", o navegador rola a página até o elemento com o id secao2.</p>
    
    <hr>

    <h2>Links Imagem com &lta></h2>
    <p>
        Você também pode transformar uma imagem em um link usando a tag <code>&lta></code>. Isso é útil quando você quer que o usuário clique em uma imagem para navegar para outra página. Exemplo:
    </p>
    <div class="code">
        <pre>
&lta href="https://meusite.com">
    &ltimg src="logo.png" alt="Logo do site">
&lt/a></pre>
    </div>
    
    <p>Nesse exemplo, a imagem logo.png se torna clicável e leva o usuário para meusite.com.</p>

    <hr>

    <p>
        A tag <code>&lta></code> é uma das mais usadas e mais importantes no HTML. Ela transforma conteúdo simples em links interativos, permitindo a navegação entre páginas, o download de arquivos, e até a movimentação dentro de uma página. Com os atributos certos e seguindo boas práticas, você pode criar uma navegação eficiente e acessível para seus usuários.
    </p>

    <p>
        Dominar o uso da tag <code>&lta></code> é fundamental para qualquer desenvolvedor web. Agora que você conhece sua estrutura, atributos e boas práticas, está pronto para explorar mais sobre essa poderosa ferramenta e aplicá-la em seus projetos!
    </p>
</div>

<?php
include_once '../footer.php';
?>