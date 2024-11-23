<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltheader> HTML</h1>

    <p>A tag <code>&ltheader></code> é usada para agrupar elementos introdutórios ou de navegação em uma página ou
        seção. Ela representa o "<strong>cabeçalho</strong>" de um documento ou de uma parte específica dele.</p>

    <p>Normalmente, um <code>&ltheader></code> pode conter:</p>

    <ul>
        <li>O título ou logo do site.</li>
        <li>Navegação principal.</li>
        <li>Um subtítulo ou slogan.</li>
        <li>Introduções relacionadas ao conteúdo da página.</li>
    </ul>

    <div class="code">
        <pre>
&ltheader>
    &lth1>Nome do Site&lt/h1>
    &ltp>Slogan ou descrição do site&lt/p>
&lt/header></pre>
    </div>

    <hr>

    <h2>Quando usar &ltheader>?</h2>

    <p>A tag <code>&ltheader></code> pode ser usada em diferentes partes de uma página:</p>

    <ul>
        <li><strong>No topo da página</strong>: Para o cabeçalho geral do site, como logotipo, menu de navegação e
            título.</li>
        <li><strong>Em seções específicas</strong>: Cada <code>&ltsection></code> ou <code>&ltarticle></code> pode ter
            seu próprio <code>&ltheader></code>.</li>
    </ul>

    <hr>

    <h2>Estrutura Completa de um Cabeçalho</h2>
<p>Um cabeçalho pode conter os seguintes elementos:</p>

<ul>
    <li><strong>Título Principal</strong>: O nome do site ou página.</li>
    <li><strong>Slogan/Subtítulo</strong>: Uma frase curta que descreve o objetivo do site.</li>
    <li><strong>Menu de Navegação</strong>: Links para diferentes páginas do site.</li>
    <li><strong>Logotipo ou Imagem</strong>: Uma imagem que representa a marca ou o site.</li>
</ul>

<hr>

<h2>Benefícios da Tag &ltheader></h2>
<ul>
    <li>
        <strong>Melhora a Semântica do Site</strong>:
        
        Usar <code>&ltheader></code> ajuda a organizar a estrutura do HTML, tornando o código mais fácil de entender por humanos e máquinas (como motores de busca e leitores de tela).
    </li>
    <li>
        <strong>Acessibilidade</strong>:
        
        Ferramentas de leitura para deficientes visuais identificam facilmente o <code>&ltheader></code> como o cabeçalho da página ou seção, ajudando na navegação.
    </li>
    <li>
        <strong>SEO (Otimização para Motores de Busca)</strong>:
        
        Motores de busca como o Google reconhecem <code>&ltheader></code> como um elemento estrutural importante, o que pode beneficiar a classificação do site.
    </li>
</ul>
</div>

<?php
include_once '../footer.php';
?>