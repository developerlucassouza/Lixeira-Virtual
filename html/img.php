<?php
include_once '../header.php';
?>

<div class="lesson">
    <h1>Tag &ltimg> HTML</h1>

    <p>A tag <code>&ltimg></code> é usada para inserir imagens em uma página HTML. Ela não possui uma tag de fechamento (é uma tag autocontida) e requer, no mínimo, o atributo src para especificar o caminho da imagem.</p>

    <div class="code">
        <pre>&ltimg src="caminho-da-imagem.jpg" alt="Descrição da imagem"></pre>
    </div>

    <hr>

    <h2>Principais Atributos da Tag &ltimg></h2>

    <ul>
        <li>
            <code>src</code> (Fonte da Imagem): Especifica o caminho ou URL da imagem que será exibida. Ele pode ser:
            <ul>
                <li>
                    <strong>Caminho relativo</strong>: Para imagens no mesmo diretório ou em subpastas do site.
                    <div class="code">
                        <pre>&ltimg <em>src="imagens/foto.jpg"</em>></pre>
                    </div>
                </li>
                <li>
                    <strong>Caminho absoluto</strong>: Para imagens hospedadas em outro servidor.
                    <div class="code">
                        <pre>&ltimg <em>src="https://example.com/imagem.jpg"</em>></pre>
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <code>alt</code> (Texto Alternativo): Define uma descrição textual para a imagem. Esse texto é exibido caso a imagem não carregue ou para leitores de tela (acessibilidade).
            <div class="code">
                <pre>&ltimg src="foto.jpg" <em>alt="Foto de uma paisagem com montanhas ao fundo"</em>></pre>
            </div>
        </li>
        <li>
            <code>width</code> e <code>height</code> (Largura e Altura): Controlam o tamanho da imagem em pixels ou porcentagem.
            <div class="code">
                <pre>&ltimg src="foto.jpg" <em>width="300" height="200"</em>></pre>
            </div>
        </li>
        <li>
            <code>title</code> (Título da Imagem): Exibe uma dica (tooltip) quando o mouse passa sobre a imagem.
            <div class="code">
                <pre>&ltimg src="foto.jpg" alt="Descrição" <em>title="Título da imagem"</em>></pre>
            </div>
        </li>
        <li>
            <code>loading</code>: Controla o carregamento da imagem. Pode receber dois valores:
            <ul>
                <li><code>lazy</code>: Carrega imagens apenas quando entram no campo de visão do usuário (melhora performance).</li>
                <li><code>eager</code>: Carrega as imagens imediatamente.</li>
            </ul>
            <div class="code">
                <pre>&ltimg src="foto.jpg" alt="Descrição" <em>loading="lazy"</em>></pre>
            </div>
        </li>
        <li>
        <code>srcset</code> e <code>sizes</code>: Usados para imagens responsivas, permitem que o navegador escolha a melhor resolução com base no tamanho da tela. Exemplo com diferentes tamanhos:
            <div class="code">
                <pre>
&ltimg src="imagem-baixa-res.jpg" 
     srcset="imagem-media-res.jpg 768w, imagem-alta-res.jpg 1200w" 
     sizes="(max-width: 768px) 100vw, 50vw" 
     alt="Imagem responsiva"></pre>
            </div>
        </li>
    </ul>

    <hr>

    <h2>Boas Práticas no Uso de Imagens</h2>
<ul>
    <li>
        <strong>Sempre use o atributo alt</strong>:      
        <ul>
            <li>Melhora a acessibilidade e ajuda no SEO.</li>
            <li>Descreva o conteúdo ou a função da imagem.</li>
        </ul>
    </li>
    <li>
        <strong>Otimize o tamanho da imagem</strong>:
        <ul>
            <li>Use ferramentas como TinyPNG ou Squoosh para reduzir o peso das imagens sem perder qualidade.</li>
            <li>Imagens pesadas podem prejudicar o tempo de carregamento da página.</li>
        </ul>
    </li>
    <li>
        <strong>Escolha o formato correto</strong>:
        <ul>
            <li><strong>JPEG</strong>: Ideal para fotos e imagens com muitas cores.</li>
            <li><strong>PNG</strong>: Para imagens com transparência.</li>
            <li><strong>WebP</strong>: Formato moderno com alta compressão e qualidade.</li>
        </ul>
    </li>
    <li>
        <strong>Use imagens responsivas</strong>:
        <ul>
            <li>Adapte as imagens ao tamanho da tela do usuário com srcset, sizes ou CSS.</li>
        </ul>
    </li>
    <li>
        <strong>Evite distorção</strong>:
        <ul>
            <li>Não force proporções incorretas. Use height: auto para preservar o aspecto.</li>
        </ul>
    </li>
</ul>

<hr>

<h2>Problemas Comuns e Soluções</h2>
<ul>
    <li>
        <strong>Imagem não aparece</strong>:
        <ul>
            <li>Verifique o caminho no atributo src.</li>
            <li>Certifique-se de que a imagem está no diretório correto.</li>
        </ul>
    </li>
    <li>
        <strong>Imagem demora a carregar</strong>:
        <ul>
            <li>Use o atributo <code>loading="lazy"</code>.</li>
            <li>Otimize o tamanho do arquivo da imagem.</li>
        </ul>
    </li>
    <li>
        <strong>Imagem distorcida</strong>:
        <ul>
            <li>Não defina width e height manualmente sem respeitar a proporção original. Use height: auto.</li>
        </ul>
    </li>
</ul>
</div>

<?php
include_once '../footer.php';
?>