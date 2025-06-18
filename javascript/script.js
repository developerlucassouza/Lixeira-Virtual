// INSERIR LOGO
let logo = document.querySelector('img#logo');
logo.src = '../imgs/logo_javascript.png';
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
// pages.innerHTML += '<a href="#"> JS</a>';

pages.innerHTML += '<a href="../"><i class="fa-solid fa-trash-can"></i> Lixeira Virtual</a>';
pages.innerHTML += '<a href="./">JavaScript Introdução</a>';

pages.innerHTML += '<p>JavaScript Básico</p>';