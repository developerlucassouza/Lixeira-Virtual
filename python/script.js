// INSERIR LOGO
let logo = document.querySelector('img#logo');
logo.src = '../imgs/logo_python.png';
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
// pages.innerHTML += '<a href="#">&lt > </a>';

pages.innerHTML += '<a href="../"><i class="fa-solid fa-trash-can"></i> Lixeira Virtual</a>';
pages.innerHTML += '<a href="./">Python Introdução</a>';

pages.innerHTML += '<p>Python Básico</p>';

pages.innerHTML += '<a href="#">Instalação do Python</a>';
pages.innerHTML += '<a href="#">Output</a>';
pages.innerHTML += '<a href="#">Input</a>';
pages.innerHTML += '<a href="#">Variáveis</a>';
pages.innerHTML += '<a href="#">Tipos Primitivos</a>';
pages.innerHTML += '<a href="#">Manipulação de Strings</a>';
pages.innerHTML += '<a href="#">Operadores Aritméticos</a>';
pages.innerHTML += '<a href="#">Operadores Relacionais</a>';
pages.innerHTML += '<a href="#">Operadores Lógicos</a>';
pages.innerHTML += '<a href="#">If...Else</a>';
pages.innerHTML += '<a href="#">Elif</a>';
pages.innerHTML += '<a href="#">Laço For</a>';
pages.innerHTML += '<a href="#">Laço While</a>';
pages.innerHTML += '<a href="#">Break e Continue</a>';
pages.innerHTML += '<a href="#">Bibliotecas Externas</a>';
pages.innerHTML += '<a href="#">Biblioteca Math</a>';
pages.innerHTML += '<a href="#">Biblioteca Random</a>';
pages.innerHTML += '<a href="#">Biblioteca Time</a>';
pages.innerHTML += '<a href="#">Tuplas</a>';
pages.innerHTML += '<a href="#">Listas</a>';
pages.innerHTML += '<a href="#">Dicionários</a>';
pages.innerHTML += '<a href="#">Funções</a>';
pages.innerHTML += '<a href="#">Tratamento de Erros e Exceções</a>';