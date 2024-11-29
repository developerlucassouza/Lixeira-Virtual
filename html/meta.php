<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltmeta> HTML</h1>

    <p>A tag <code>&ltmeta></code> é um elemento vazio usado no <code>&lthead></code> de documentos HTML para fornecer
        informações sobre a página aos navegadores, motores de busca e outros sistemas. Essas informações são chamadas
        de metadados e não aparecem diretamente no conteúdo visual do site.</p>
    <div class="code">
        <pre>&ltmeta charset="UTF-8"></pre>
    </div>

    <hr>

    <h2>Usos Comuns da Tag &ltmeta></h2>

    <ul>
        <li>
            <strong>Definir Codificação de Caracteres</strong>:
            O atributo <code>charset</code> define a codificação de caracteres do documento. O padrão mais usado é o
            UTF-8, que suporta quase todos os caracteres, incluindo acentos e emojis.
            <div class="code">
                <pre>&ltmeta charset="UTF-8"></pre>
            </div>
        </li>

        <li>
            <strong>Configurar Responsividade</strong>:
            O atributo <code>name</code> com valor <code>viewport</code> e o atributo <code>content</code> ajustam a
            visualização em dispositivos móveis.
            <div class="code">
                <pre>&ltmeta name="viewport" content="width=device-width, initial-scale=1.0"></pre>
            </div>
        </li>

        <li>
            <strong>Descrever a Página (SEO)</strong>:
            Motores de busca utilizam a descrição fornecida pelo atributo <code>name="description"</code> para exibir
            resumos da página nos resultados.
            <div class="code">
                <pre>&ltmeta name="description" content="A melhor loja de eletrônicos online com preços incríveis!"></pre>
            </div>
        </li>

        <li>
            <strong>Palavras-chave (Menos Usado Hoje)</strong>:
            Historicamente, o atributo <code>keywords</code> era usado para fornecer palavras-chave para SEO, mas a
            maioria dos motores de busca ignora esse atributo atualmente.
            <div class="code">
                <pre>&ltmeta name="keywords" content="eletrônicos, smartphones, tablets"></pre>
            </div>
        </li>

        <li>
            <strong>Autor da Página</strong>:
            Indica o autor do conteúdo.
            <div class="code">
                <pre>&ltmeta name="author" content="João da Silva"></pre>
            </div>
        </li>

        <li>
            <strong>Controle de Cache</strong>:
            Configurações para evitar que navegadores armazenem cópias antigas da página.
            <div class="code">
                <pre>
&ltmeta http-equiv="cache-control" content="no-cache">
&ltmeta http-equiv="expires" content="0"></pre>
            </div>
        </li>

        <li>
            <strong>Redirecionamento e Atualização</strong>:
            Atualiza ou redireciona a página após um tempo especificado.
            <div class="code">
                <pre>&ltmeta http-equiv="refresh" content="5; url=https://www.example.com"></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Atributos Principais da Tag &ltmeta></h2>

    <ul>
        <li>
        <code>charset</code>:
        Define a codificação de caracteres do documento.
        <div class="code">
            <pre>&ltmeta charset="UTF-8"></pre>
        </div>
        </li>

        <li>
        <code>name</code>:
        Especifica o tipo de metadado (ex.: <code>description</code>, <code>keywords</code>, <code>author</code>, <code>viewport</code>).
        </li>

        <li>
        <code>content</code>:
        Fornece o valor associado ao atributo <code>name</code> ou <code>http-equiv</code>.
        </li>

        <li>
        <code>http-equiv</code>:
        Simula cabeçalhos HTTP, permitindo configurar o comportamento do navegador.
        <div class="code">
            <pre>&ltmeta http-equiv="refresh" content="10; url=https://example.com"></pre>
        </div>
        </li>

        <li>
        <code>property</code> (para Open Graph):
        Usado para integração com redes sociais como Facebook e LinkedIn.
        <div class="code">
            <pre>
&ltmeta property="og:title" content="Minha Página">
&ltmeta property="og:description" content="Descrição da página">
&ltmeta property="og:image" content="imagem.jpg"></pre>
        </div>
        </li>
    </ul>

    <hr>

    <h2>Benefícios da Tag &ltmeta></h2>
<ul>
    <li><strong>Melhora SEO</strong>: Ajuda motores de busca a entender o conteúdo da página.</li>
    <li><strong>Otimização para Dispositivos Móveis</strong>: Com a <code>viewport</code>, garante responsividade.</li>
    <li><strong>Integração com Redes Sociais</strong>: O Open Graph melhora como os links aparecem nas redes sociais.</li>
    <li><strong>Configurações do Navegador</strong>: Permite controlar cache, redirecionamentos e codificação.</li>
</ul>

<hr>

<h2>Boas Práticas no Uso da Tag &ltmeta></h2>
<ul>
    <li>
        <strong>Sempre Defina charset</strong>:
        
        Isso evita problemas de codificação, como caracteres estranhos no texto.
    </li>
    <li>
        <strong>Otimize para SEO</strong>:
        
        Use descrições claras e relevantes no <code>name="description"</code>.
    </li>
    <li>
        <strong>Responsividade</strong>:
        
        Inclua o metadado <code>viewport</code> para garantir que o site seja responsivo.
    </li>
    <li>
        <strong>Evite Palavras-Chave em keywords</strong>:
        
        Motores de busca modernos não utilizam mais esse atributo.
    </li>
    <li>
        <strong>Teste o Open Graph</strong>:
        
        Use ferramentas como o Facebook Sharing Debugger para verificar como os links serão exibidos.
    </li>
</ul>

<hr>

<p>A tag <code>&ltmeta></code> é fundamental para otimizar o desempenho, a acessibilidade e o SEO de páginas HTML. Usá-la corretamente ajuda a criar experiências mais robustas e otimizadas, tanto para usuários quanto para mecanismos de busca.</p>
</div>

<?php
include_once '../footer.php';
?>