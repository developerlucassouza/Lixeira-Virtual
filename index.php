<?php
include_once 'header.php';
?>

<style>
    /* ESCONDER MENU LATERAL */
    @media screen and (min-width: 768px) {
        #menu {
            display: none;
        }
    }

    /* AJUSTAR DO CONTAINER */
    @media screen and (min-width: 768px) {
        main.container {
            margin-left: 16.7vw;
        }
    }

    










    div.apresentacao {
        background: url('imgs/fundo-programacao.jpg');
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
        height: 93vh;
        padding-top: 35vh;
        width: 103.75%;
    }

    /* AJUSTAR TAMANHO */
    /* @media screen and (max-width: 767px) {
        div.apresentacao {
            width: 103.75% !important;
        }
    } */

    div.apresentacao h1 {
        background-color: var(--verde);
        border-radius: 20px;
        box-shadow: 0px 0px 20px var(--azul);
        display: block;
        margin: auto;
        padding: 20px;
        text-align: center;
        transition: 1s;
    }

    div.apresentacao h1:hover {
        box-shadow: 0px 0px 70px var(--azul);
    }

    @media screen and (min-width: 768px) {
        div.apresentacao h1 {
            width: 40vw;
        }
    }

    @media screen and (max-width: 767px) {
        div.apresentacao h1 {
            width: 80vw;
        }
    }









    div.techs {
        width: 100% !important;
    }

    div.techs div {
        padding: 0;
    }
    
    div.techs img {
        display: block;
        margin: 100px auto;
        height 50%;
        width: 50%;
    }

    div.techs a:link,
    div.techs a:visited {
        display: block;
        padding: 20px;
        text-align: center;
        transition: 0.5s;
        width: 100%;
    }

    div.techs a:hover,
    div.techs a:active {
        box-shadow: inset 0px 0px 10px white;
        text-decoration: none;
    }





    div.redessociais {
        background-color: #292929;
        color: white;
        padding-bottom: 30px;
    }

    div.redessociais h2 {
        margin: 0 !important;
        padding: 30px 0;
        text-align: center;
    }

    div.redessociais a:link,
    div.redessociais a:visited {
        border-radius: 10px;
        display: block;
        font-size: 1.5em;
        margin: auto;
        padding: 10px;
        text-align: center;
        width: 90%;
    }
</style>



<div class="apresentacao">
    <h1>Lixeira Virtual</h1>
</div>

<div class="techs">
    <div class="row">
        <div class="col-md-4 bg-tech-1">
            <img src="imgs/logo_html.png" alt="Logo HTML5">
            <a href="html/" class="bg-dark text-light">Aprenda HTML <i class="devicon-html5-plain"></i></a>
        </div>
        <div class="col-md-4 bg-tech-2">
            <img src="imgs/logo_css.png" alt="Logo CSS3">
            <a href="#" class="bg-dark text-light">Aprenda CSS <i class="devicon-css3-plain"></i></a>
        </div>
        <div class="col-md-4 bg-tech-1">
            <img src="imgs/logo_javascript.png" alt="Logo JavaScript">
            <a href="#" class="bg-dark text-light">Aprenda JavaScript <i class="devicon-javascript-plain"></i></a>
        </div>
        <!-- <div class="col-md-4 bg-tech-2">
            <img src="imgs/logo_python.png" alt="Logo Python">
            <a href="#" class="bg-dark text-light">Aprenda Python <i class="devicon-python-plain"></i></a>
        </div> -->
        <!-- <div class="col-md-4 bg-tech-2">
            <img src="imgs/logo_php.png" alt="Logo PHP">
            <a href="#" class="bg-dark text-light">Aprenda PHP <i class="devicon-php-plain"></i></a>
        </div> -->
        <!-- <div class="col-md-4 bg-tech-1">
            <img src="imgs/logo_mysql.png" alt="Logo MySQL">
            <a href="#" class="bg-dark text-light">Aprenda MySQL <i class="devicon-mysql-original"></i></a>
        </div> -->

        <!-- <div class="col-md-4 bg-tech-1">
            <img src="imgs/vermais.png" alt="Ver Mais">
            <a href="#" class="bg-dark text-light">Ver Mais...</a>
        </div> -->
        
    </div>
</div>

<div class="redessociais">
    <h2>Conheça Nossas Redes Sociais</h2>

    <a href="https://instagram.com/developerlucassouza" target="_blank" class="bg-instagram"><i class="fa-brands fa-instagram"></i> Developer Lucas Souza</a>
</div>

<script>
    document.querySelector('main.container').className = '';
    document.querySelector('#menu').style.display = 'none';
</script>

<?php
include_once 'footer.php';
?>