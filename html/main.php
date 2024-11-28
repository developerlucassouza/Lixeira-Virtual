<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltmain> HTML</h1>
    <p>A tag <code>&ltmain></code> é um elemento semântico introduzido no HTML5 que representa o conteúdo principal de
        um documento HTML. Ela é usada para englobar a parte mais relevante de uma página, ou seja, o conteúdo único e
        diretamente relacionado ao objetivo da página.</p>

    <hr>

    <h2>Características Principais da Tag &ltmain></h2>
    <ul>
        <li><strong>Semântica</strong>: Define claramente onde está o conteúdo principal de uma página.</li>
        <li><strong>Acessibilidade</strong>: Ajuda leitores de tela a identificar o conteúdo principal.</li>
        <li><strong>Exclusividade</strong>: Cada documento deve ter apenas um <code>&ltmain></code>, e ele não pode
            conter conteúdo repetido em outras páginas, como cabeçalhos, barras laterais ou rodapés.</li>
    </ul>

    <hr>

    <h2>Estrutura Básica da Tag &ltmain></h2>
    <p>A tag <code>&ltmain></code> geralmente envolve seções principais da página, como artigos, formulários, textos
        explicativos, etc.</p>

    <div class="code">
        <pre>
        <!DOCTYPE html>
&lthtml lang="pt-BR">
&lthead>
  &ltmeta charset="UTF-8">
  &ltmeta name="viewport" content="width=device-width, initial-scale=1.0">
  &lttitle>Exemplo de Main&lt/title>
&lt/head>
&ltbody>
  &ltheader>
    &lth1>Cabeçalho do Site&lt/h1>
  &lt/header>
  
  <em>&ltmain></em>
    &lth2>Bem-vindo ao Nosso Site!&lt/h2>
    &ltp>Aqui você encontra os melhores conteúdos sobre tecnologia.&lt/p>
  <em>&lt/main></em>
  
  &ltfooter>
    &ltp>© 2024 Meu Site&lt/p>
  &lt/footer>
&lt/body>
&lt/html></pre>
    </div>

    <hr>

    <h2>Benefícios da Tag &ltmain></h2>
    <ul>
        <li>
            <strong>Acessibilidade</strong>:

            Ferramentas como leitores de tela usam <code>&ltmain></code> para navegar diretamente ao conteúdo principal,
            ignorando cabeçalhos e rodapés.
        </li>
        <li>
            <strong>SEO (Otimização para Motores de Busca)</strong>:

            Motores de busca como o Google identificam a tag <code>&ltmain></code> como um indicativo de conteúdo
            relevante para indexação.
        </li>
        <li>
            <strong>Clareza no Código</strong>:

            Facilita a organização e manutenção do código ao separar claramente o conteúdo principal.
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltmain></h2>
    <ul>
        <li>
            <strong>Apenas um &ltmain> por página</strong>:

            Ele deve conter apenas o conteúdo relevante e único da página.
        </li>
        <li>
            <strong>Não incluir cabeçalhos, rodapés ou barras laterais</strong>:

            Esses elementos não fazem parte do conteúdo principal e têm suas próprias tags semânticas
            (<code>&ltheader></code>, <code>&ltfooter></code>, <code>&ltaside></code>).
        </li>
        <strong>Evitar redundância</strong>:

        O conteúdo dentro de <code>&ltmain></code> deve ser único e exclusivo.
    </ul>

    <hr>

    <p>A tag <code>&ltmain></code> é essencial para criar páginas HTML semânticas, acessíveis e bem estruturadas. Ela
        melhora tanto a experiência do usuário quanto o desempenho da página em motores de busca. Incorporá-la ao seu
        código é uma prática recomendada para todos os projetos web.</p>
</div>

<?php
include_once '../footer.php';
?>