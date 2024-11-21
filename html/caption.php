<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltcaption> HTML</h1>

    <p>A tag <code>&ltcaption></code> é usada para fornecer um título ou legenda a uma tabela. Ela deve ser a primeira
        tag dentro do elemento <code>&lttable></code> e descreve o conteúdo ou a finalidade da tabela. Seu uso melhora a
        acessibilidade, permitindo que leitores de tela e outros dispositivos assistivos forneçam informações mais
        claras sobre a tabela para os usuários.</p>

    <div class="code">
        <pre>
&lttable>
    &ltcaption>Descrição da tabela&lt/caption>
    <span class="comentario">&lt!-- Conteúdo da tabela --></span>
&lt/table></pre>
    </div>

    <hr>

    <h2>Importância da Tag &ltcaption></h2>
    <p>A tag <code>&ltcaption></code> é essencial por vários motivos:</p>

    <ul>
        <li><strong>Acessibilidade</strong>: Ajuda a descrever o propósito da tabela para leitores de tela, tornando a
            tabela mais
            acessível para usuários com deficiências visuais.</li>
        <li><strong>Contexto</strong>: Fornece um título descritivo que facilita o entendimento do conteúdo da tabela
            para todos os usuários.</li>
        <li><strong>Semântica</strong>: O HTML é uma linguagem de marcação semântica, e a tag <code>&ltcaption></code> é
            a maneira apropriada de fornecer uma legenda para tabelas.</li>
    </ul>

    <hr>

    <p>A tag <code>&ltcaption></code> desempenha um papel essencial na acessibilidade e clareza das tabelas em HTML. Ela permite que você forneça uma legenda descritiva para tabelas, ajudando usuários a entender o conteúdo de forma rápida e clara. Além disso, seu uso é fundamental para garantir que dispositivos assistivos apresentem a tabela corretamente.</p>
</div>

<?php
include_once '../footer.php';
?>