// INSERIR LOGO
let logo = document.querySelector('img#logo');
logo.src = '../imgs/logo_css.png';
logo.style.display = 'block';
logo.style.margin = '50px auto';

// RENOMEAR TAG TITLE
try {
    document.querySelector('title').innerHTML = document.querySelector('h1').innerHTML + ' - Lixeira Virtual';
} catch(ERRO) {
    console.log(ERRO.getMessage());
}



// ORGANIZAR PAGINAÇÃO
let pages = document.querySelector('#menu');

pages.innerHTML = '';

// MOLDE
// pages.innerHTML += '<a href=""> </a>';

pages.innerHTML += '<a href="../"><i class="fa-solid fa-trash-can"></i> Lixeira Virtual</a>';
pages.innerHTML += '<a href="./">CSS Introdução</a>';

// pages.innerHTML += '<p>Níveis de CSS</p>';
// pages.innerHTML += '<a href="#">CSS Inline </a>';
// pages.innerHTML += '<a href="#">CSS Interno </a>';
// pages.innerHTML += '<a href="#">CSS Externo </a>';

// pages.innerHTML += '<p>Psicologia das Cores</p>';
// pages.innerHTML += '<a href="#">Psicologia das Cores </a>';

// pages.innerHTML += '<p>Unidades de Medida em CSS</p>';
// pages.innerHTML += '<a href="pixels.php">Pixels (px) </a>';
// pages.innerHTML += '<a href="porcentagem.php">Porcentagem (%) </a>';

// pages.innerHTML += '<p>Funções de Valores em CSS</p>';
// pages.innerHTML += '<a href="linear-gradient.php">linear-gradient() </a>';

// pages.innerHTML += '<p>Pseudo-classes em CSS</p>';
// pages.innerHTML += '<a href="hover.php">hover </a>';
// pages.innerHTML += '<a href="visited.php">visited </a>';
// pages.innerHTML += '<a href="active.php">active </a>';
// pages.innerHTML += '<a href="checked.php">checked </a>';

// pages.innerHTML += '<p>Pseudo-elementos em CSS</p>';
// pages.innerHTML += '<a href="content.php">content </a>';

// pages.innerHTML += '<p>Variáveis em CSS</p>';
// pages.innerHTML += '<a href="root.php">root </a>';







pages.innerHTML += '<p>Estilos CSS</p>';

// B
pages.innerHTML += '<a href="background-attachment.php">background-attachment </a>';
pages.innerHTML += '<a href="background-color.php">background-color </a>';
pages.innerHTML += '<a href="background-image.php">background-image </a>';
pages.innerHTML += '<a href="background-position.php">background-position </a>';
pages.innerHTML += '<a href="background-size.php">background-size </a>';
// pages.innerHTML += '<a href="border.php">border </a>';
pages.innerHTML += '<a href="border-collapse.php">border-collapse </a>';
pages.innerHTML += '<a href="border-color.php">border-color </a>';
pages.innerHTML += '<a href="border-radius.php">border-radius </a>';
pages.innerHTML += '<a href="border-style.php">border-style </a>';
pages.innerHTML += '<a href="border-width.php">border-width </a>';
pages.innerHTML += '<a href="box-shadow.php">box-shadow </a>';
// pages.innerHTML += '<a href="box-sizing.php">box-sizing </a>';

// C
pages.innerHTML += '<a href="color.php">color </a>';

// D
pages.innerHTML += '<a href="display.php">display </a>';

// F
// pages.innerHTML += '<a href="float.php">float </a>';
// pages.innerHTML += '<a href="font.php">font </a>';
pages.innerHTML += '<a href="font-family.php">font-family </a>';
pages.innerHTML += '<a href="font-size.php">font-size </a>';
pages.innerHTML += '<a href="font-style.php">font-style </a>';
// pages.innerHTML += '<a href="font-variant.php">font-variant </a>';
pages.innerHTML += '<a href="font-weight.php">font-weight </a>';

// H
pages.innerHTML += '<a href="height.php">height </a>';

// L
// pages.innerHTML += '<a href="left.php">left </a>';
pages.innerHTML += '<a href="line-height.php">line-height </a>';

// M
pages.innerHTML += '<a href="margin.php">margin </a>';

// O
pages.innerHTML += '<a href="outline.php">outline </a>';
pages.innerHTML += '<a href="overflow-x.php">overflow-x </a>';
pages.innerHTML += '<a href="overflow-y.php">overflow-y </a>';

// P
pages.innerHTML += '<a href="padding.php">padding </a>';
// pages.innerHTML += '<a href="position.php">position </a>';

// T
pages.innerHTML += '<a href="text-align.php">text-align </a>';
pages.innerHTML += '<a href="text-decoration.php">text-decoration </a>';
pages.innerHTML += '<a href="text-indent.php">text-indent </a>';
// pages.innerHTML += '<a href="text-transform.php">text-transform </a>';
// pages.innerHTML += '<a href="transform.php">transform </a>';
pages.innerHTML += '<a href="transition-duration.php">transition-duration </a>';
// pages.innerHTML += '<a href="top.php">top </a>';

// V
// pages.innerHTML += '<a href="vertical-align.php">vertical-align </a>';

// W
pages.innerHTML += '<a href="width.php">width </a>';

// Z
pages.innerHTML += '<a href="z-index.php">z-index </a>';

// MOLDE
// pages.innerHTML += '<a href=""> </a>';