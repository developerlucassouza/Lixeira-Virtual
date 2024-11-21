<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Introdução ao HTML</h1>

    <p>Bem-vindo à introdução ao HTML! Vamos explorar o que é o HTML, como ele funciona, e por que ele é essencial no
        desenvolvimento de sites e aplicações web.</p>

    <hr>

    <h2>O que é HTML?</h2>
    <p><strong>HTML</strong> significa <strong>HyperText Markup Language</strong>, ou seja, uma Linguagem de Marcação de
        Hipertexto. Mas o que exatamente isso quer dizer? Vamos desmembrar esses termos:</p>

    <ul>
        <li><strong>Hipertexto</strong> refere-se ao texto que contém links para outros textos ou recursos. A principal
            ideia da web é a capacidade de conectar documentos e informações por meio de links, permitindo uma navegação
            fácil e dinâmica entre páginas e sites.</li>

        <li><strong>Linguagem de Marcação</strong> significa que o HTML não é uma linguagem de programação no sentido
            tradicional (como C ou Python, que executam lógica e cálculos). O HTML é usado para marcar o conteúdo de uma
            página, ou seja, para organizar e estruturar informações de forma que um navegador (como Chrome ou Firefox)
            consiga entender e exibir.</li>
    </ul>

    <p>
        Portanto, o HTML é a base de qualquer site. Sem HTML, os navegadores não conseguiriam exibir textos, imagens,
        vídeos ou quaisquer outros elementos visuais da web. Ele fornece a "Espinha Dorsal" de um site.
    </p>

    <hr>

    <h2>A Estrutura do HTML</h2>
    <p>
        O HTML trabalha como um guia que indica ao navegador como deve exibir os diferentes elementos de uma página.
        Imagine
        que você vai montar um documento no Word. O HTML seria o equivalente a dizer: "Aqui está o título", "Isso é um
        parágrafo", "Aqui vai uma imagem". Essas instruções são o que chamamos de <strong>tags HTML</strong>, que
        envolvem o conteúdo e dizem como ele deve ser exibido.
    </p>

    <p>Vamos pensar no HTML como um "esqueleto" da web:</p>


    <ul>
        <li><strong>Cabeça e Corpo</strong>: Em um site, o HTML é dividido em duas partes principais:</li>
        <ul>
            <li>
                <strong>A seção da cabeça (head)</strong>: Esta seção contém informações sobre a página, como o título
                que aparece na aba do
                navegador e outras configurações que influenciam como a página é carregada, mas que o usuário geralmente
                não vê
                diretamente.
            </li>
            <li>
                <strong>A seção do corpo (body)</strong>: Aqui é onde o conteúdo visível da página está. Ou seja, tudo
                que você vê quando abre um
                site – textos, imagens, vídeos, links, etc. – está no corpo da página.
            </li>
        </ul>
    </ul>


    <div class="code">
        <pre>
&lthtml>
    &lthead>
        <span class="comentario">&lt!-- Cabeça do Documento --></span>
    &lt/head>

    &ltbody>
        <span class="comentario">&lt!-- Corpo do Documento --></span>
    &lt/body>
&lt/html></pre>
    </div>

    <hr>

    <h2>O Papel do HTML na Web</h2>
    <p>
        O HTML é uma linguagem de marcação universal, o que significa que <strong>todos os navegadores entendem e
            processam HTML da mesma forma </strong> (ou quase da mesma forma, com pequenas variações). Graças ao HTML,
        podemos construir sites que podem ser vistos em praticamente qualquer dispositivo com acesso à internet, seja um
        computador, smartphone ou tablet.
    </p>

    <p>
        Outro aspecto importante é que <strong>o HTML é independente de plataforma</strong>. Isso quer dizer que não
        importa se você está
        criando uma página num Mac, num PC com Windows ou num smartphone – o HTML vai funcionar da mesma maneira.
    </p>

    <hr>

    <h2>Como o HTML Funciona?</h2>
    <p>
        Imagine que você escreveu um documento com texto, imagens e links. Para que esse documento seja visto por
        qualquer
        pessoa na web, você precisa de uma forma de "traduzir" essa estrutura para algo que os navegadores entendam. É
        aí
        que entra o HTML. <strong>Ele transforma o conteúdo em algo compreensível para o navegador</strong>.
    </p>

    <p>
        Por exemplo, quando você acessa uma página da web, o navegador lê o código HTML e, a partir dessas instruções,
        monta
        e exibe a página para você, organizando os elementos conforme as regras que o HTML define. É como se o navegador
        estivesse montando um "quebra-cabeça" com as peças que o HTML fornece.
    </p>

    <hr>

    <h2>HTML e Outras Tecnologias</h2>

    <div class="row">
        <div class="col-md-7">
            <p>
                Uma coisa importante de entender é que o HTML não trabalha sozinho. Ele se combina com outras
                tecnologias para criar uma experiência web completa:
            </p>

            <ul>
                <li>
                    <strong>CSS (Cascading Style Sheets)</strong>: Enquanto o HTML cuida da estrutura da página, o CSS
                    cuida da aparência. Ou seja, o CSS define o estilo da página – as cores, os tamanhos de fontes, o
                    layout dos elementos, e muito mais. HTML e CSS são como o corpo e as roupas de um site: o HTML
                    define a "forma", e o CSS define a "beleza".
                </li>
                <li>
                    <strong>JavaScript</strong>: Se o HTML é a estrutura e o CSS é o estilo, o JavaScript traz a
                    interatividade. Com JavaScript, podemos criar sites dinâmicos, onde o conteúdo muda conforme a
                    interação do usuário. Um exemplo é quando você clica em um botão e algo acontece na página, como uma
                    animação ou a exibição de mais informações.
                </li>
                <li>
                    <strong>Back-end e Banco de Dados</strong>: O HTML lida com o que chamamos de front-end, que é a
                    parte que o usuário vê e interage. Já o back-end é a parte do site que lida com processamento de
                    dados, como armazenar e buscar informações de um banco de dados. HTML sozinho não processa dados,
                    mas ele pode ser usado para coletar informações (através de formulários, por exemplo) que depois são
                    processadas por tecnologias de back-end.
                </li>
            </ul>
        </div>

        <div class="col-md-5">
            <img src="imgs/index-HTML e Outras Tecnologias.jpg" alt="HTML e Outras Tecnologias"
                style="display:block; margin:auto; max-width:100%;">
        </div>
    </div>

    <hr>

    <h2>Porque o HTML é Importante?</h2>
    <p>
        <strong>O HTML é a porta de entrada para o desenvolvimento web</strong>. Todo desenvolvedor que queira trabalhar
        com sites ou
        aplicações web precisa aprender HTML. Mesmo com ferramentas modernas que facilitam a criação de páginas, como
        WordPress ou Wix, o HTML é o coração de qualquer conteúdo exibido na internet.
    </p>

    <p>
        Além disso, o HTML é uma linguagem acessível para aprender. Ao contrário de outras linguagens de programação, o
        HTML
        não exige uma lógica complexa para começar a usá-lo. Você pode escrever algumas linhas de HTML, salvar o arquivo
        com
        a extensão <code>.html</code>, abri-lo no navegador e, instantaneamente, ver o resultado. Isso torna o HTML uma
        excelente escolha para quem está começando no mundo da programação ou do desenvolvimento web.
    </p>

    <hr>

    <p>
        Em resumo, <strong>o HTML é a base de qualquer página ou aplicação web</strong>. Ele organiza e estrutura o
        conteúdo, permitindo que navegadores e dispositivos entendam e exibam corretamente as informações. Aprender HTML
        é o primeiro passo para entrar no mundo do desenvolvimento web, e com ele, você estará pronto para explorar
        outras tecnologias e ferramentas que tornarão seus sites mais bonitos e funcionais.
    </p>
</div>

<?php
include_once '../footer.php';
?>