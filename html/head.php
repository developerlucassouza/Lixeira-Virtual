<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &lthead> HTML</h1>

    <p>A tag <code>&lthead></code> é uma das partes mais importantes de uma página HTML. Ela funciona como o "cérebro"
        da página, onde você define informações que não aparecem diretamente no corpo visível do site, mas são
        essenciais para que o navegador entenda como renderizá-lo. Também ajuda os mecanismos de busca e outros sistemas
        a interpretar o conteúdo da página.</p>

    <hr>

    <h2>Estrutura da Tag &lthead></h2>
    <p>A tag <code>&lthead></code> está localizada logo após a abertura da tag <code>&lthtml></code> e antes da tag
        <code>&ltbody></code>. Seu conteúdo é usado para configurações e informações da página, como título, metadados,
        estilos e scripts.
    </p>

    <div class="code">
        <pre>
&lt!DOCTYPE html>
&lthtml lang="pt-br">
    &lthead>
        <span class="comentario">&lt!-- Conteúdo do &lthead> --></span>
    &lt/head>
    &ltbody>
        <span class="comentario">&lt!-- Conteúdo visível do site --></span>
    &lt/body>
&lt/html></pre>
    </div>

    <hr>

    <h2>Funções Principais</h2>
    <ul>
        <li>
            <strong>Definir o título da página</strong>:

            Usado na aba do navegador e como nome da página em buscas.
            Tag: <code>&lttitle></code>.
        </li>
        <li>
            <strong>Fornecer metadados</strong>:

            Informações sobre a página para navegadores, buscadores e redes sociais.
            Tag: <code>&ltmeta></code>.
        </li>
        <li>
            <strong>Importar estilos</strong>:

            Adicionar folhas de estilo CSS para definir o design do site.
            Tag: <code>&ltlink></code>.
        </li>
        <li>
            <strong>Adicionar scripts</strong>:

            Carregar ou executar códigos JavaScript para funcionalidades dinâmicas.
            Tag: <code>&ltscript></code>.
        </li>

        <li><strong>Outras configurações</strong>: Configuração de favicon (ícone na aba do navegador), fontes externas,
            e muito mais.</li>
    </ul>

    <hr>

    <h2>Elementos Comuns Dentro do &lthead></h2>

    <ul>
        <li>
            <code>&lttitle></code>: Define o título da página

            <div class="code">
                <pre>&lttitle>Minha Loja Virtual&lt/title></pre>
            </div>

            <ul>
                <li>Aparece na aba do navegador.</li>
                <li>Importante para SEO: o título ajuda a ranquear a página nos buscadores.</li>
            </ul>
        </li>

        <li>
            <code>&ltmeta></code>: Fornece metadados

            <ul>
                <li>
                    Declaração de charset (conjunto de caracteres):

                    <div class="code">
                        <pre>&ltmeta charset="UTF-8"></pre>
                    </div>

                    Garante que caracteres especiais, como acentos, sejam exibidos corretamente.
                </li>

                <li>
                    Responsividade:

                    <div class="code">
                        <pre>&ltmeta name="viewport" content="width=device-width, initial-scale=1.0"></pre>
                    </div>

                    Faz o site se ajustar a telas menores, como smartphones.
                </li>

                <li>
                    Descrição da página (SEO):

                    <div class="code">
                        <pre>&ltmeta name="description" content="Compre produtos incríveis na nossa loja virtual com os melhores preços."></pre>
                    </div>
                </li>
            </ul>
        </li>

        <li>
            <code>&ltlink></code>: Importa arquivos externos

            <ul>
                <li>
                    Folha de estilo CSS:

                    <div class="code">
                        <pre>&ltlink rel="stylesheet" href="styles.css"></pre>
                    </div>

                    Adiciona o design da página definido no arquivo styles.css.
                </li>
                <li>
                    Favicon:

                    <div class="code">
                        <pre>&ltlink rel="icon" href="favicon.ico"></pre>
                    </div>

                    Define o pequeno ícone exibido na aba do navegador.
                </li>
            </ul>
        <li>
            <code>&ltscript></code>: Adiciona ou importa JavaScript

            <ul>
                <li>
                    Código JS diretamente no HTML:
                    <div class="code">
                        <pre>
&ltscript>
    console.log("Olá, mundo!");
&lt/scrip></pre>
                    </div>
                </li>
                <li>
                    Importar um arquivo JavaScript externo:
                    <div class="code">
                        <pre>&ltscript src="script.js">&lt/script></pre>
                    </div>
                </li>
            </ul>
        </li>
        </li>
    </ul>

    <hr>

    <h2>Por que o &lthead> é tão importante?</h2>
<ul>
    <li>
        <strong>Acessibilidade e Experiência do Usuário</strong>:
        
        Configurações no <code>&lthead></code> podem melhorar o desempenho da página e facilitar o acesso em diferentes dispositivos.
    </li>
    <li>
        <strong>SEO (Otimização para Motores de Busc</strong>a):
        
        Tags como <code>&lttitle></code> e <code>&ltmeta></code> ajudam o Google a entender sobre o que é o seu site.
    </li>
    <li>
        <strong>Performance</strong>:
        
        Arquivos de estilo e scripts otimizados garantem que o site carregue mais rápido.
    </li>
</ul>

</div>

<?php
include_once '../footer.php';
?>