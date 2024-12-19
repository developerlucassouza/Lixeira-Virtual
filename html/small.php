<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltsmall> HTML</h1>

    <p>A tag <code>&ltsmall></code> é usada para representar um texto secundário, como rodapés, disclaimers ou notas
        legais. O texto renderizado dentro da tag aparece em um tamanho menor em relação ao texto padrão ao redor, mas
        isso pode ser personalizado via CSS.</p>

    <div class="code">
        <pre>&ltp>Desenvolvido por &ltsmall>Lucas Souza&lt/small>.&lt/p></pre>
    </div>

    <p>Desenvolvido por <small>Lucas Souza</small>.</p>

    <hr>

    <h2>Características da Tag &ltsmall></h2>
    <ul>
        <li>É um elemento inline (aparece na mesma linha do texto ao redor).</li>
        <li>
            Usada para indicar texto que não é o foco principal, como:
            <ul>
                <li>Direitos autorais.</li>
                <li>Avisos legais.</li>
                <li>Notas de rodapé.</li>
                <li>Informações adicionais.</li>
            </ul>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas</h2>
    <ul>
        <li>
            <strong>Não abuse do &ltsmall></strong>:
            Use-o apenas para informações secundárias. Não deve ser usado para reduzir o tamanho de texto principal (use
            CSS para isso).
        </li>

        <li>
            <strong>Mantenha a acessibilidade</strong>:
            Texto muito pequeno pode prejudicar a leitura de pessoas com deficiências visuais. Ajuste o tamanho com
            cuidado.
        </li>

        <li>
            <strong>Evite texto irrelevante</strong>:
            Inclua apenas informações relevantes no <code>&ltsmall></code>. Textos excessivamente pequenos podem ser
            ignorados pelos usuários.
        </li>

        <li>
            <strong>Combine com outros elementos semânticos</strong>:
            Utilize <code>&ltfooter></code> ou <code>&ltaside></code> para criar uma estrutura semântica mais rica.
        </li>
    </ul>
    <hr>

    <p>A tag <code>&ltsmall></code> é uma ferramenta simples, mas eficaz, para destacar informações secundárias em seu
        site. Ao utilizá-la corretamente e combiná-la com boas práticas de design, você melhora a experiência do usuário
        e garante uma hierarquia visual clara.</p>

</div>

<?php
include_once '../footer.php';
?>