<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltscript> HTML</h1>

    <p>A tag <code>&ltscript></code> é usada para incluir ou executar scripts, normalmente escritos em JavaScript, em
        páginas HTML. Esses scripts podem ser usados para <strong>adicionar interatividade, manipular elementos da
            página e executar lógica do lado do cliente</strong>.</p>

    <div class="code">
        <pre>
&ltscript>
    console.log("Olá, mundo!");
&lt/script>

&ltscript src="script.js">&lt/script></pre>
    </div>

    <hr>

    <h2>Características Principais da Tag &ltscript></h2>
    <ul>
        <li><strong>Adiciona Funcionalidades</strong>: Permite a inclusão de lógica e interatividade em páginas HTML.
        </li>
        <li><strong>Pode ser Interno ou Externo</strong>: O código pode ser escrito diretamente no HTML ou carregado de
            um arquivo externo.</li>
        <li><strong>Executado no Navegador</strong>: O código JavaScript é processado diretamente pelo navegador.</li>
    </ul>

    <hr>

    <h2>Atributos da Tag &ltscript></h2>
    <ul>
        <li>
            <code>src</code>:
            Especifica o caminho para um arquivo JavaScript externo.
            <div class="code">
                <pre>&ltscript <em>src="app.js"</em>>&lt/script></pre>
            </div>
        </li>
        <li>
            <code>type</code>:
            Define o tipo de script. Por padrão, é <code>text/javascript</code>.
            <div class="code">
                <pre>
&ltscript <em>type="text/javascript"</em>>
    console.log("Isso é um script JavaScript.");
&lt/script></pre>
            </div>
        </li>
        <li>
            <code>async</code>:
            Carrega o script de forma assíncrona em paralelo ao carregamento da página. Executado assim que é carregado.
            <div class="code">
                <pre>&ltscript src="script.js" <em>async</em>>&lt/script></pre>
            </div>
        </li>
        <li>
            <code>defer</code>:
            Adia a execução do script até que o HTML seja totalmente carregado. Ideal para manter a página funcional
            antes da execução do JavaScript.
            <div class="code">
                <pre>&ltscript src="script.js" <em>defer</em>>&lt/script></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso da Tag &ltscript></h2>
    <ul>
        <li>
            <strong>Prefira Scripts Externos</strong>:
            Manter o JavaScript em arquivos separados melhora a organização e facilita a reutilização do código.
        </li>
        <li>
            <strong>Use defer Sempre que Possível</strong>:
            Para scripts que manipulam o DOM, defer garante que o HTML esteja completamente carregado antes da execução.
        </li>
        <li>
            <strong>Mantenha o Código Limpo e Bem Estruturado</strong>:
            Use boas práticas de programação no código JavaScript.
        </li>
        <li>
            <strong>Carregue Scripts no Fim do Documento</strong>:
            Se não usar <code>async</code> ou <code>defer</code>, coloque os scripts no final do <code>&ltbody></code> para não atrasar o carregamento do conteúdo.
        </li>
        <li>
            <strong>Evite Blocos de Script Inline</strong>:
            Embora úteis em casos específicos, é melhor manter o JavaScript em arquivos externos.
        </li>
    </ul>

    <hr>

    <p>A tag <code>&ltscript></code> é um elemento essencial no desenvolvimento web moderno, permitindo adicionar lógica e interatividade às páginas. Compreender os atributos, a localização no documento e as boas práticas de uso é fundamental para criar aplicações web eficientes e responsivas.</p>
</div>

<?php
include_once '../footer.php';
?>