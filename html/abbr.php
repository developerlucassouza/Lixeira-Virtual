<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltabbr> HTML</h1>
    <p>A tag <code>&ltabbr></code> é uma tag de HTML usada para indicar uma abreviação ou sigla. Ela permite que os
        desenvolvedores forneçam uma explicação ou descrição completa do termo abreviado, melhorando a acessibilidade e
        a usabilidade do site, especialmente para leitores de tela.</p>

    <p>A sintaxe básica da tag <code>&ltabbr></code> é:</p>

    <div class="code">
        <pre>
&ltabbr title="Significado Completo da Abreviação">Texto Abreviado&lt/abbr></pre>
    </div>

    <ul>
        <li><strong>title</strong>: Este é um atributo obrigatório que contém o significado completo da abreviação ou
            sigla.</li>
        <li><strong>Texto Abreviado</strong>: É o termo abreviado que será exibido na página.</li>
    </ul>

    <p>Exemplo básico:</p>

    <div class="code">
        <pre>
&ltp>O <em>&ltabbr title="HyperText Markup Language">HTML&lt/abbr></em> é a linguagem base da web.&lt/p></pre>
    </div>

    <p>O <abbr title="HyperText Markup Language">HTML</abbr> é a linguagem base da web.</p>
    <p>Neste exemplo, ao passar o mouse sobre "HTML", o navegador mostrará uma dica (tooltip) com o significado
        completo: HyperText Markup Language.</p>

    <hr>

    <h2>Benefícios do Uso da Tag &ltabbr></h2>
    <ul>
        <li>
            <strong>Melhora a Acessibilidade</strong>:
            Leitores de tela podem informar o usuário sobre o significado da abreviação, o que ajuda pessoas com
            deficiências
            visuais ou cognitivas.
        </li>
        <li>
            <strong>Usabilidade e Experiência do Usuário</strong>:
            O usuário pode visualizar o significado de uma sigla ou abreviação ao passar o mouse, o que facilita o
            entendimento
            de termos técnicos ou incomuns.
        </li>
        <li>
            <strong>Semântica e SEO</strong>:
            O uso correto de tags semânticas melhora a estrutura do conteúdo e pode contribuir para a otimização de
            mecanismos
            de busca (SEO).
        </li>
    </ul>

    <hr>

    <h2>Atributo title e sua Importância</h2>
    <p>
        O atributo <code>title</code> na tag &ltabbr> é o que fornece a explicação completa da abreviação. Ele é
        obrigatório para garantir que a abreviação faça sentido.
    </p>

    <p>Exemplo:</p>

    <div class="code">
        <pre>
&ltp>A NASA, ou <em>&ltabbr title="National Aeronautics and Space Administration">NASA&lt/abbr></em>, explora o espaço.&lt/p></pre>
    </div>

    <p>A NASA, ou <abbr title="National Aeronautics and Space Administration">NASA</abbr>, explora o espaço.</p>
    <p>
        Se o atributo title for omitido, o significado da abreviação será perdido, o que pode comprometer a
        acessibilidade e a clareza.
    </p>

    <h2>Boas Práticas no Uso da Tag &ltabbr></h2>
    <ul>
        <li><strong>Sempre use o atributo <code>title</code></strong>: Ele é o responsável por dar o significado
            completo à abreviação.</li>

        <li>
            <strong>Evite sobrecarregar o conteúdo com &ltabbr></strong>: Utilize a tag apenas onde realmente faz
            sentido fornecer uma
            explicação
            da sigla ou abreviação.
        </li>
        <li>
            <strong>Seja consistente</strong> tag &ltabbr> para uma sigla em uma página, tente manter o padrão em outras
            partes
            do site.
        </li>
        <li>
            <strong>Teste a acessibilidade</strong>: Use ferramentas como leitores de tela para verificar se o conteúdo
            está acessível para todos os usuários.
        </li>
    </ul>

    <hr>

    <p>
        A tag &ltabbr> é uma ferramenta simples, mas poderosa para tornar seu
        conteúdo mais acessível e semântico. Ela ajuda a fornecer
        informações adicionais sobre siglas e abreviações sem sobrecarregar
        o usuário com detalhes excessivos. Usar &ltabbr> de forma apropriada
        melhora a experiência de todos os usuários, inclusive aqueles
        que utilizam tecnologias assistivas.
    </p>
</div>

<?php
include_once '../footer.php';
?>