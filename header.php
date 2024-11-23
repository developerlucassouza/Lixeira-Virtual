<?php
$caminho = 'http://localhost/lixeiravirtual/';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lixeira Virtual</title>

    <link rel="shortcut icon" href="<?php echo $caminho ?>imgs/lixeira.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Devicon -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />


    <!-- CSS Próprio -->
    <link rel="stylesheet" href="<?php echo $caminho ?>style.css">
</head>

<body>

    <header class="nav bg-dark text-light">
        <i id="menu-icon" class="fa-solid fa-bars h-auto"></i>
        <a href="<?php echo $caminho ?>">
            <h2 class="nav-item"><i class="fa-solid fa-trash-can"></i> Lixeira Virtual</h2>
        </a>
        <ul class="nav-item">
            <li class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa-solid fa-chalkboard-user h-auto"></i> Cursos
                </button>
                <div class="dropdown-menu bg-dark text-light" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo $caminho; ?>html/"><i class="devicon-html5-plain"></i> HTML</a>

                    <a class="dropdown-item" href="<?php echo $caminho; ?>css/"><i class="devicon-css3-plain"></i> CSS</a>

                    <a class="dropdown-item" href="<?php echo $caminho; ?>javascript/"><i class="devicon-javascript-plain"></i> JavaScript</a>

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>php/"><i class="devicon-php-plain"></i> PHP</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>mysql/"><i class="devicon-mysql-original"></i> MySQL</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>python/"><i class="devicon-python-plain"></i> Python</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>java/"><i class="devicon-java-plain"></i> Java</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>c/"><i class="devicon-c-plain"></i> C</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>cpp/"><i class="devicon-cplusplus-plain"></i> C++</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>csharp/"><i class="devicon-csharp-plain"></i> C#</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>ruby/"><i class="devicon-ruby-plain"></i> Ruby</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>jquery/"><i class="devicon-jquery-plain"></i> jQuery</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>typescript/"><i class="devicon-typescript-plain"></i> TypeScript</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>nodejs/"><i class="devicon-nodejs-plain-wordmark"></i> NodeJS</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>react/"><i class="devicon-react-plain"></i> React.js</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>angular/"><i class="devicon-angular-plain"></i> Angular</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>vue/"><i class="devicon-vuejs-plain"></i> Vue.js</a> -->

                    <!-- <a class="dropdown-item" href="<?php echo $caminho; ?>laravel/"><i class="devicon-laravel-original"></i> Laravel</a> -->
                </div>
            </li>

            <li class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="devicon-windows8-original"></i> SOs
                </button>
                <div class="dropdown-menu bg-dark text-light" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 11</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 10</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 8.1</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 7</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows Vista</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows XP</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 98</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 95</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 3.0</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 2.0</a>
                    <a class="dropdown-item" href="#">
                        <i class="devicon-windows8-original"></i> Windows 1.0</a>
                </div>
            </li>
        </ul>
    </header>

    <div style="height: 7vh"></div>

    <div class="row">
        <div id="menu" class="menu col-md-2">
            <p>Por Onde Começar?</p>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
            <a href="#">JavaScript</a>
        </div>

        <!-- AJUSTAR TAMANHO DO MENU -->
        <script>
            let menu = document.querySelector('#menu');
            if (window.innerWidth >= 768) {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        </script>

        <main class="container col-md-10">
            <img src="#" alt="#" id="logo" style="display:none; max-width:250px">