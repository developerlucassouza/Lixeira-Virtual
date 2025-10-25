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



// JS Básico
pages.innerHTML += '<p>JavaScript Básico</p>';
pages.innerHTML += '<a href="output.php">JS Output</a>';
pages.innerHTML += '<a href="variaveis.php">JS Variáveis</a>';
pages.innerHTML += '<a href="tiposprimitivos.php">JS Tipos Primitivos</a>';
pages.innerHTML += '<a href="alertconfirmprompt.php">JS alert(), confirm() e prompt()</a>';
pages.innerHTML += '<a href="manipulacaodestrings.php">JS Manipulação de Strings</a>';
pages.innerHTML += '<a href="operadoresaritmeticos.php">JS Operadores Aritméticos</a>';
pages.innerHTML += '<a href="operadoresrelacionais.php">JS Operadores Relacionais</a>';
pages.innerHTML += '<a href="operadoreslogicos.php">JS Operadores Lógicos</a>';
pages.innerHTML += '<a href="ifelse.php">JS if/else</a>';
pages.innerHTML += '<a href="operadorternario.php">JS Operador Ternário</a>';
pages.innerHTML += '<a href="switchcase.php">JS switch/case</a>';
pages.innerHTML += '<a href="horasedatas.php">JS Horas e Datas</a>';
pages.innerHTML += '<a href="math.php">JS Biblioteca Math</a>';
pages.innerHTML += '<a href="numerosaleatorios.php">JS Números Aleatórios</a>';
pages.innerHTML += '<a href="for.php">JS for</a>';
pages.innerHTML += '<a href="while.php">JS while</a>';
pages.innerHTML += '<a href="dowhile.php">JS do while</a>';
pages.innerHTML += '<a href="breakecontinue.php">JS break e continue</a>';
pages.innerHTML += '<a href="arrays.php">JS Arrays</a>';
pages.innerHTML += '<a href="funcoes.php">JS Funções</a>';
pages.innerHTML += '<a href="tratamentodeerros.php">JS Tratamento de Erros</a>';



// DOM
pages.innerHTML += '<p>DOM</p>'
pages.innerHTML += '<a href="oqueedom.php">O que é DOM?</a>';
pages.innerHTML += '<a href="write.php">JS write()</a>';
pages.innerHTML += '<a href="selecionandoelementosdom.php">JS Selecionando Elementos DOM</a>';
pages.innerHTML += '<a href="innerhtml.php">JS .innerHTML</a>';
//pages.innerHTML += '<a href="#">JS Alterando Elementos</a>';
pages.innerHTML += '<a href="createelement.php">JS Criando Elementos</a>';
pages.innerHTML += '<a href="remove.php">JS Excluindo Elementos</a>';
pages.innerHTML += '<a href="eventosdom.php">JS Eventos DOM</a>';
pages.innerHTML += '<a href="setattribute.php">JS .setAttribute</a>';
pages.innerHTML += '<a href="reload.php">JS Atualizar a Página</a>';
pages.innerHTML += '<a href="open.php">JS Abrir uma nova Página</a>';
pages.innerHTML += '<a href="queryselectorall.php">JS "para cada elemento"</a>';



// localStorage
pages.innerHTML += '<p>localStorage</p>';
pages.innerHTML += '<a href="oqueelocalstorage.php">O que é localStorage?</a>';
pages.innerHTML += '<a href="lssetitem.php">JS Armazenando Valores</a>';
pages.innerHTML += '<a href="lsgetitem.php">JS Recuperando Valores</a>';
pages.innerHTML += '<a href="lsremoveitem.php">JS Removendo Valores</a>';
pages.innerHTML += '<a href="lsqtddeitens.php">JS Quantidade de Itens</a>';
pages.innerHTML += '<a href="lstodosositens.php">JS Mostrando Todos os Dados</a>';



// Mais
pages.innerHTML += '<p>Mais</p>'
pages.innerHTML += '<a href="fatorial.php">JS Função Fatorial</a>';
pages.innerHTML += '<a href="eval.php">JS Transformar String em Expressão Aritmética</a>';
// pages.innerHTML += '<a href="#">JS Copiar para Área de Transferência</a>';

// pages.innerHTML += '<a href="#">JS </a>';