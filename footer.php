</main>
</div>

<!-- jQuery/Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

<script>
    // MENU BURGUER
    document.querySelector('#menu-icon').addEventListener('click', menuBurguer);
    function menuBurguer() {
        let menu = document.querySelector('#menu');
        let main = document.querySelector('main.container');
        // alert('|' + menu.style.display + '|');
        if (menu.style.display == 'block') {
            menu.style.display = 'none';
            if (window.innerWidth >= 768) {
                main.style.marginLeft = 'auto';
            }
        } else {
            menu.style.display = 'block';
            if (window.innerWidth >= 768) {
                main.style.marginLeft = '16.7vw';
            }
        }
    };



    try {
        // NAVEGAÇÃO ATIVO
        window.addEventListener('load', function () {
            // Obtém a URL atual
            let url = new URL(window.location.href);

            // Obtém o pathname da URL
            let pathname = url.pathname;

            // Separa o pathname em partes usando o caractere '/'
            let partes = pathname.split('/');

            // Obtém a última parte do pathname (parte final da URL)
            let urlFinal = partes[partes.length - 1];

            // Avalia href de cada tag e se ela é igual à parte final da URL atual
            for (let ancora of document.querySelectorAll('div#menu a')) {
                let href = ancora.getAttribute('href');
                // Se o href for igual à parte final da URL, adiciona a classe 'ativo'
                if ((href === urlFinal) || ((urlFinal === '' || urlFinal === 'index.php') && href === './')) {
                    ancora.classList.add('ativo');
                }
            }
        });
    } catch (ERRO) {
        console.log(ERRO.message);
    }
</script>

<script src="script.js"></script>
</body>

</html>